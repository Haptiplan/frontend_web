    
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/foooter.css">
    <link rel="stylesheet" href="../styles/procurement.css">
</head>
<body>
    <!-- Header -->
    <?php include_once('./header.php'); ?>

    <!-- Creat machine --> 
    <h1>Maschinen</h1>
    
    <form class="add_form">
        <div>
            <label for="machine_name">Machine name</label>
            <input type="text" name="machine_name" id="machine_name">
        </div>
        <div>
            <label for="machine_capacity">Machine capacity</label>
            <input type="text" name="machine_capacity" id="machine_capacity">
        </div>
        <div>
            <label for="machine_price">Machine price</label>
            <input type="text" name="machine_price" id="machine_price">
        </div>
        <div>
            <label for="machine_duration">machine duration</label>
            <input type="text" name="machine_duration" id="machine_duration">
        </div>
        <div>
            <label for="machine_period">machine_period</label>
            <input type="text" name="machine_period" id="machine_period">
        </div>
        <button type="submit">create machine</button>
    </form>
    
    <ul class='dataList'></ul>
    <template class="machineTemplate">
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
    
    <div id="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img id="trashcan-image" src="../styles/trashcanclosed.png" alt="trashcan" style="max-width: 100%; max-height: 100%;">
    </div>
    <script src="../scripts/procurement_machine.js"></script>

    <!-- Footer -->
    <?php include_once('./footer.php'); ?>


</body>
</html>

