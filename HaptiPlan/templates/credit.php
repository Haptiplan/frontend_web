<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit</title>
    <link rel="stylesheet" href="../styles/procurement.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/foooter.css">
</head>

<body>
    <?php include_once('header.php'); ?>
    <h1>Kredit</h1>
    <form class="update_form">
        <label for="credit">Kredit:</label>
        <input type="range" id="credit" name="credit" min="1000000" max="10000000" value="5000000" step="10000">
        <div id="creditValue">5000000</div>
    </form>
    <script src="../scripts/procurement_credit.js"></script>
</body>

</html>