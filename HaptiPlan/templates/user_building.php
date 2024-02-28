<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/foooter.css">
    <link rel="stylesheet" href="../styles/create_building.css">
</head>

<body>
    <!-- Header -->
    <?php include_once('./header.php'); ?>
    <ul class='dataList'></ul>
    <template class="buildingTemplate">
        <div class="building_list">
            <div class="building_name"></div>
            <div class="building_price"></div>
            <div class="building_type_id"></div>
        </div>
    </template>
    <script src="../scripts/holding_building.js"></script>

</body>
</html>