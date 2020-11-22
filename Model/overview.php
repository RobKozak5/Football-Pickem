<!DOCTYPE html>
<html>
<body>
<?php 
require_once '../Controller/DB_include.php'; 
include 'pick-week.php';

// get database connection
  $database = new Database();
  $db = $database->connect();
?>  
<center><h2>Select your week</h2></center><hr />
<br><br><br><br><br>
<!-- Button to weekly pick modal -->

<center><div class="success">
<a data-toggle="modal" data-target="#buttonGrid" href="" type="button" class="btn btn-success">Weeks</a>
</div></center> 