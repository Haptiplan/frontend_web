<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./HaptiPlan/styles/header.css">
    <link rel="stylesheet" href="HaptiPlan/styles/foooter.css">
    <link rel="stylesheet" href="./HaptiPlan/styles/procurement.css">
</head>
<body>
    <!-- Header -->
    <?php include_once('./HaptiPlan/templates/header.php'); ?>

    <!-- Creat machine -->
    <?php include_once ('./HaptiPlan/templates/create_machine.php')?>

    <!-- Footer -->
    <?php include_once('./HaptiPlan/templates/footer.php'); ?>

    <script src="./HaptiPlan/scripts/procurement_machine.js"></script>
</body>
</html>
