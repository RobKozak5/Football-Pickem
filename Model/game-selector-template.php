<?php
// Include list
include "../Controller/DB_include.php";
include "../View/header.php";
include "../Controller/weekly-games.php";
include "../Controller/hidden-weight.php";
?>

<form id="games" action="insert-picks.php" method="POST">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                <thead class="bg-light">
                    <tr class="border-0">
                    <th class="border-0">Home Team</th>
                    <th class="border-0"></th>
                    <th class="border-0">Points</th>
                    <th class="border-0"></th>
                    <th class="border-0">Away Team</th>
                    <select disabled="" name="hidden" style="width:0">
						<option value="0">&nbsp;</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
                    </select>
                </thead>
                <tbody>
                
<?php                                
// get database connection
$database = new Database();
$db = $database->connect();
echo $i=0;
// Set week from GET variable
$week = $_GET['week'];

// Get Thursday night games
$query = "SELECT * FROM v_pickem_grid 
          WHERE week = $week AND day_played = 'Thursday' AND season = 2020";
echo "<th>Thursday Games</th>";
foreach ($db->query($query) as $row) {
    // Initialize variables
    $identifier = $row['identifier']; // Use identifier as hidden input when submitting the form
    $home_team = $row['home_team'];
    $away_team = $row['away_team'];
    $game = "Game";
    $H = "H";

    // Echo out games in table format
    echo "<tr><td>" . $row['home_city'] . $row['home_team_name'] . ++$i . "</td>";
    //echo "<td><input type=\"radio\" name =\"$identifier\"  value = \"$home_team\"/></td>";
    echo "<td><input type=\"radio\" name=\"$game$i\" value='H' checked=''></td>";
    echo "<td>
    <select name='games' size='1' style='font-size: 8px; width:40;' onchange='removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)'>
        <option value='0'>&nbsp;</option>																		
        <option value='1'>1</option>											
        <option value='2'>2</option>										
        <option value='3'>3</option>											
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>	
        <option value='8'>8</option>
        <option value='9'>9</option>
        <option value='10'>10</option>
        <option value='11'>11</option>
        <option value='12'>12</option>
        <option value='13'>13</option>
        <option value='14'>14</option>
        <option value='15'>15</option>
        <option value='16'>16</option>
    </select>
</td>";
        //echo "<td><input type=\"radio\" name =\"$identifier\"  value = \"$away_team\"/></td>";
        echo "<td><input type=\"radio\" name=\"$game$i\" value='A' checked=''></td>";
    echo "<td>" . $row['away_city'] . $row['away_team_name'] . "</td>";
    echo "</tr>";
    
};


// Get Sunday picks
$query = "SELECT * FROM v_pickem_grid 
          WHERE week = $week AND day_played = 'Sunday' AND season = 2020";
echo "<th>Sunday picks</th>";
foreach ($db->query($query) as $row) {
    // Initialize variables
    $identifier = $row['identifier'];
    $home_team = $row['home_team'];
    $away_team = $row['away_team'];
    
    // Echo out picks in table format
    echo "<tr><td>" . $row['home_city'] . $row['home_team_name'] . ++$i ."</td>";
    echo "<td><input type=\"radio\" name=\"$game$i\" value='H' checked=''></td>";
    echo "<td>
    <select name='games' size='1' style='font-size: 8px; width:40;' onchange='removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)'>
        <option value='0'>&nbsp;</option>																		
        <option value='1'>1</option>											
        <option value='2'>2</option>										
        <option value='3'>3</option>											
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>	
        <option value='8'>8</option>
        <option value='9'>9</option>
        <option value='10'>10</option>
        <option value='11'>11</option>
        <option value='12'>12</option>
        <option value='13'>13</option>
        <option value='14'>14</option>
        <option value='15'>15</option>
        <option value='16'>16</option>
    </select>
</td>";
        //echo "<td><input type=\"radio\" name =\"$identifier\"  value = \"$away_team\"/></td>";
        echo "<td><input type=\"radio\" name=\"$game$i\" value='A' checked=''></td>";
        echo "<td>" . $row['away_city'] . $row['away_team_name'] . "</td>";
    echo "</tr>";
};
?>
</tbody>
</br></br></br>
<button class="btn btn-primary btn-block mt-4" id="pickSubmit" name="pickSubmit">Submit your picks</button>

</form>
</table>
</div></div></div></div>


