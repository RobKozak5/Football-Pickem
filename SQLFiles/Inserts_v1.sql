use football_pickem;

-- Insert first user
insert into fp_users
(email, password)
values
('rtkozak0515@gmail.com','password');

-- Insert NFL teams
insert into fp_teams
(team_code, city, team_name, primary_color, secondary_color)
values
('AZ', 'Arizona', 'Cardinals', '#97233F', '#000000'),
('ATL', 'Atlanta', 'Falcons', '#A71930', '#000000'),
('BAL', 'Baltimore', 'Ravens', '#241773', '#000000'),
('BUF', 'Buffalo', 'Bills', '#00338D', '#C60C30'),
('CAR', 'Carolina', 'Panthers', '#0085CA', '#101820'),
('CHI', 'Chicago', 'Bears', '#0B162A', '#C83803'),
('CIN', 'Cincinnati', 'Bengals', '#F', '#000000'),
('CLE', 'Cleveland', 'Browns', '#311D00', '#FF3C00'),
('DAL', 'Dallas', 'Cowboys', '', '#7F9695'),
('DEN', 'Denver', 'Broncos', '#FB4F14', '#002244'),
('DET', 'Detroit', 'Lions', '#0076B6', '#B0B7BC'),
('GB', 'Green Bay', 'Packers', '#203731', '#FFB612'),
('HOU', 'Houston', 'Texans', '#03202F', '#A71930'),
('IND', 'Indianapolis', 'Colts', '#003087', '#A2AAAD'),
('JAC', 'Jacksonville', 'Jaguars', '#0067', '#9F792C'),
('KC', 'Kansas City', 'Chiefs', '#E31837', '#FFB81C'),
('LAC', 'Los Angeles', 'Chargers', '#002A5E', '#FFC20E'),
('LAR', 'Los Angeles', 'Rams', '#003594', '#FFA300'),
('MIA', 'Miami', 'Dolphins', '#008E97', '#FC4C02'),
('MIN', 'Minnesota', 'Vikings', '#4F2683', '#FFC62F'),
('NE', 'New England', 'Patriots', '#002244', '#C60C30'),
('NO', 'New Orleans', 'Saints', '#D3BC8D', '#101820'),
('NYG', 'New York', 'Giants', '#0B2265', '#A71930'),
('NYJ', 'New York', 'Jets', '#125740', '#FFF'),
('LV', 'Las Vagas', 'Raiders', '#000000', '#A5ACAF'),
('PHI', 'Philadelphia', 'Eagles', '#004C54', '#ACC0C6'),
('PIT', 'Pittsburgh', 'Steelers', '#101820', '#FFB612'),
('SF', 'San Fransisco', '49ers', '#AA0000', '#B3995D'),
('SEA', 'Seattle', 'Seahawks', '#002244', '#69BE28'),
('TB', 'Tampa Bay', 'Buccaneers', '#34302B', '#FF7900'),
('TEN', 'Tennessee', 'Titans', '#4B92DB', '#C8102E'),
('WAS', 'Washington', 'Football Team', '#773141', '#FFB612');

-- Insert some data for a test week
insert into fp_games
(season, week, home_team, away_team, day_played)
values
('2020', '1', 'CLE', 'PIT', 'Thursday'),
('2020', '1', 'PHI', 'NYG', 'Sunday'),
('2020', '1', 'CIN', 'BAL', 'Sunday'),
('2020', '1', 'NO', 'ATL', 'Monday')