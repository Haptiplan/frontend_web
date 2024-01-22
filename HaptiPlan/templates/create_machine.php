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

    <form>
        <div>
            <label for="machine_name">Machine name</label>
            <input type="text" name="machine_name" id="machine_name" required>
            <div>
                <div>
                    <label for="machine_capacity">Machine capacity</label>
                    <input type="text" name="machine_capacity" id="machine_capacity" required>
                    <div>
                        <div>
                            <label for="machine_price">Machine price</label>
                            <input type="text" name="machine_price" id="machine_price" required>
                            <div>
                                <div>
                                    <label for="machine_duration">machine duration</label>
                                    <input type="text" name="machine_duration" id="machine_duration" required>
                                    <div>
                                        <div>
                                            <label for="machine_period">machine_period</label>
                                            <input type="text" name="machine_period" id="machine_period" required>
                                            <div>
                                                <button type="submit">create machine</button>
    </form>

    <ul id='dataList'></ul>
    <template id="machineTemplate">
        <div class="machine_list">
            <div class="machine_name"></div>
            <div>
                <input type="hidden" name="machineId">
                <button type="submit">löschen</button>
            </div>
            </form>
        </div>
    </template>
    <script src="../scripts/procurement_machine.js"></script>
</body>

</html>
<form class="delete_form">