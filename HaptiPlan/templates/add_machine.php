<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/foooter.css">
  <link rel="stylesheet" href="../styles/procurement.css">
</head>

<body>
 <!-- Header -->
 <?php include_once('./header.php'); ?>

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