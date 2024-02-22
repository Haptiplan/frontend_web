<!--?php
session_start();
    
if(!isset($_SESSION['user_id'])) { die("Du bist nicht angemeldet!"); };
if($_SESSION['user_role'] === 2 || $_SESSION['user_role'] === 1) { die("Du hast nicht die richtige Berechtigung!"); };
 
$userid = $_SESSION['userid'];
?-->

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
    <h1>User erstellen:</h1>

    <form class="add_form">
        <div>
            <label for="user_name">User name</label>
            <input type="text" name="User_name" id="User_name">
        </div>
        <div>
            <label for="user_password">User password</label>
            <input type="text" name="user_password" id="user_password">
        </div>
        <div>
            <label for="user_role">User role</label>
            <input type="text" name="user_role" id="user_role">
        </div>
        <button type="submit">create user</button>
    </form>

    <ul class='dataList'></ul>
    <template class="userTemplate">
        <div class="user_list">
            <div class="user_name"></div>
            <div class="user_password"></div>
            <div class="user_role"></div>
            <form class="delete_form">
                <input type="hidden" name="user_id">
            </form>
            <button>edit</button>
            <button type="click" class="delete_button">delete</button>
        </div>
    </template>
    <script src="../scripts/procurement_user.js"></script>


</body>