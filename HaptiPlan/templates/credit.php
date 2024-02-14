<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit</title>
    <link rel="stylesheet" href="../styles/procurement.css">
</head>

<body>
    <?php include_once('header.php'); ?>
    <h1>Kredit</h1>

    <form class="add_form">
        <label for="credit">Kredit:</label>
        <input type="range" id="credit" name="credit" min="1000000" max="10000000" value="5000000" step="10000">
        <div id="creditValue">5.000.000</div>
        <button type="submit">Absenden</button>
    </form>
    <ul class='dataList'></ul>
    <template class="creditTemplate">
        <div class="credit_list">
            <div class="credit_amount"></div>
        </div>
    </template>
    <script src="../scripts/procurement_credit.js"></script>
</body>

</html>