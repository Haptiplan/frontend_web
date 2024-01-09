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

    <form id="data_form">
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required>
            <button type="submit" id="submitBtn">create machine</button>
        </div>
    </form>

    <ul id='data_list'></ul>
    <template id="machine_template">
        <div class="machine_list">
            <div class="machine_name"></div>
            <form class="delete_form">
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