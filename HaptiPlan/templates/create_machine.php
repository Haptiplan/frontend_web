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
        <div class="machine_list" draggable= "true" ondragstart="dragMachine(event)">
            <div class="machine_name"></div>
            <div class="machine_capacity"></div>
            <div class="machine_price"></div>
            <div class="machine_duration"></div>
            <div class="machine_period"></div>
            <form class="delete_form">
                <input type="hidden" name="machine_id">
                <button type="button" onclick="deleteMachine(this.form)">delete</button>
            </form>
        </div>
    </template>

    <div id="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
       Löschen
    </div>

    <script src="../scripts/procurement_machine.js"></script>
</body>

</html>