-- Database create script 11/7/2020 RK --

CREATE DATABASE Football_Pickem;

USE Football_Pickem;

-- Users table
CREATE TABLE fp_users (
email varchar(50) NOT NULL PRIMARY KEY,
password varchar(60) NOT NULL
);

-- Weekly total score by user and season
CREATE TABLE fp_weekly_scores (
email varchar(50) NOT NULL,
season varchar(35) NOT NULL,
week1 tinyint DEFAULT 0,
week2 tinyint DEFAULT 0,
week3 tinyint DEFAULT 0,
week4 tinyint DEFAULT 0,
week5 tinyint DEFAULT 0,
week6 tinyint DEFAULT 0,
week7 tinyint DEFAULT 0,
week8 tinyint DEFAULT 0,
week9 tinyint DEFAULT 0,
week10 tinyint DEFAULT 0,
week11 tinyint DEFAULT 0,
week12 tinyint DEFAULT 0,
week13 tinyint DEFAULT 0,
week14 tinyint DEFAULT 0,
week15 tinyint DEFAULT 0,
week16 tinyint DEFAULT 0,
week17 tinyint DEFAULT 0,
PRIMARY KEY(email, season),
FOREIGN KEY fk_ws_email_users (email) REFERENCES fp_users(email)
);

-- Games of each week per each season
CREATE TABLE fp_games (
season varchar(35) not null,
week tinyint not null,
home_team varchar(50) not null,
away_team varchar(50) not null,
spread decimal(5,2),
home_record char(5),
away_record char(5),
day_played varchar(10) not null,
game_time time,
bye_team1 varchar(50),
bye_team2 varchar(50),
bye_team3 varchar(50),
bye_team4 varchar(50),
multiplyer char(1),
primary key(season, week, home_team, away_team)
); 

-- Create table for teams
CREATE TABLE fp_teams (
team_code char(3) PRIMARY KEY,
city varchar(30),
team_name varchar(30),
primary_color char(7),
secondary_color char(7),
alt_color char(7),
wins tinyint,
losses tinyint
);

-- Create view for game picker grid
CREATE VIEW v_pickem_grid as
select 
g.season, 
g.week, 
g.home_team, 
g.away_team, 
g.spread, 
g.day_played,
g.game_time,
t.city as home_city,
t.team_name as home_team_name,
t.primary_color as home_p_color,
t.secondary_color as home_s_color,
t.wins+'-'+t.losses as home_record,
tt.city as away_city,
tt.team_name as away_team_name,
tt.primary_color as away_p_color,
tt.secondary_color as away_s_color,
tt.wins+'-'+tt.losses as away_record
from fp_games as g inner join fp_teams as t
on g.home_team = t.team_code
inner join fp_teams tt
on g.away_team = tt.team_code


