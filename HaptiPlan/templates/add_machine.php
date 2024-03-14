<?php
session_start();

// Check if user is already logged in, if not, redirect them to login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
  header("location: login.php");
  exit;
}

// Check if user has an incorrect role
if($_SESSION["user_role"] !== 2){
  switch ($_SESSION['user_role']) {
    // Case admin
    case 0:
      exit;
    // Case gamemaster
    case 1:
      header("location: create_machine.php");
      exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../styles/procurement.css">
</head>

<body>
  <?php include_once('header.php'); ?>

  <a href="logout.php">Logout</a>
  <h2>
    Maschine kaufen:
  </h2>

  <ul class='dataList2'></ul>
  <template class="machineTemplate2">
    <div class="machine_list" draggable="true" ondragstart="dragMachine(event)">
      <div class="machine_name"></div> 
      <div class="machine_capacity"></div>
      <div class="machine_price"></div>
      <div class="machine_duration"></div>
      <div class="machine_period"></div>
      <form class="delete_form">
        <input type="hidden" name="machine_id">
      </form>
    </div>
  </template> 

  <div id="building">
    <div class="buildingPlace" id="buildingPlace1" ondrop="drop(event)" ondragover="allowDrop(event)"> </div>
    <div class="buildingPlace" id="buildingPlace2" ondrop="drop(event)" ondragover="allowDrop(event)"> </div>  
    <div class="buildingPlace" id="buildingPlace3" ondrop="drop(event)" ondragover="allowDrop(event)"> </div>
    <div class="buildingPlace" id="buildingPlace4" ondrop="drop(event)" ondragover="allowDrop(event)"> </div>
  </div> 
  <img id="machine-image" src="" alt="maschine" style="display:none;">
  
  <script src="../scripts/holding_machine.js"></script>
</body>

</html>