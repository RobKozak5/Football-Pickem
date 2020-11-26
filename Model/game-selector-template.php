<?php
// Include list
include "../Controller/DB_include.php";
include "../View/header.php";
include "../View/nav.php";
include "../Controller/weekly-games.php";
echo "game selector template";

// get database connection
$database = new Database();
$db = $database->connect();

// Set week from GET variable
$week = $_GET['week'];

// Get Thursday night games
$query = "SELECT * FROM v_pickem_grid 
          WHERE week = $week AND day_played='Thursday'";
foreach ($db->query($query) as $row) {
    echo "Thursday night game";
    echo $row['home_team'];
    echo $row['away_team'];
};
?>
