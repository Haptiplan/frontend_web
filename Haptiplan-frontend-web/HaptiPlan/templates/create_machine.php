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
    
    <form action="/Haptiplan-backend/HaptiPlan/machine" method="post">
        <label for="machine_name">Name</label>
        <input type="text" name="machine_name">
        <input type="submit" name="submit" value ="senden">
    </form> 
    <template id="machine-template">
        <div class="machineList">
            <div class="machineID"></div>
            <div class="machineName"></div>
        </div>
    </template>
    <div id="machines"></div>
    <script src="../scripts/procurement_machine.js"></script>
</body>
</html>
