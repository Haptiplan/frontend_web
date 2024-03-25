<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebäude</title>
    <link rel="stylesheet" href="../styles/create_building.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/foooter.css">
</head>

<body>
    <?php include_once('header.php'); ?>
    <h1>Gebäude erstellen</h1>
    <select id="dropdownMenu" name="dropdownMenu">
        <option id="machinery_hall" value="1">Maschinenhalle</option>
        <option id="administration_building" value="2">Verwaltungsgebäude</option>
        <option id="storage_hall" value="3">Lagerhalle</option>
    </select>
    <form class="add_form">
        <div>
            <label for="building_name">Gebäude Namen</label>
            <input type="text" name="building_name" id="building_name" required>
        </div>
        <div>
            <label for="building">Gebäude Preis</label>
            <input type="range" id="building" name="building_price" min="1000000" max="10000000" value="5000000"
                step="10000">
        </div>
        <div id="buildingValue">5000000</div>
        <button type="submit">Gebäude erstellen</button>
    </form>
    <ul class='dataList'></ul>
    <template class="buildingTemplate">
        <div class="building_list">
            <div class="building_name"></div>
            <div class="building_price"></div>
            <div class="building_type_id"></div>
        </div>
    </template>

    <script src="../scripts/procurement_building.js"></script>
</body>

</html>