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
    
    <form id="dataForm">
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required>
        </div>
        <button type="submit">create machine</button>
    </form>
    <ul id='dataList'></ul>
    <script src="../scripts/procurement_machine.js"></script>
</body>
</html>
