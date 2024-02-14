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

    <h2>
        Maschine kaufen:
    </h2>
    <ul class='dataList'></ul>
    <template class="machineTemplate">
        <div class="machine_list2" draggable="true" ondragstart="dragMachine(event)">
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
    <div ondrop="drop(event)" ondragover="allowDrop(event)" id="drop-zone2"></div> 
    <script src="../scripts/holding_machine.js"></script>
</body>

</html>