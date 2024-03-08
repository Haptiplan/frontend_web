<?php
session_start();


// Check if user is already logged in, if yes, redirect them
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    switch ($_SESSION['user_role']) {
        // Case admin
        case 0:
            exit;
        // Case gamemaster
        case 1:
            header("location: create_machine.php");
            exit;
        // Case player
        case 2:
            header("location: add_machine.php");
            exit;
    }
    exit;
}


// Processing form data when form is submitted
if (isset($_POST['submit'])) {  

    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["user_role"] = $_POST["user_role"];

    // Redirect user based on role
    switch ($_SESSION["user_role"]) {
        // Case admin
        case 0:
            break;
        // Case gamemaster
        case 1:
            header("location: create_machine.php");
            break;
        // Case player
        case 2:
            header("location: add_machine.php");
            break;
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php include_once("header.php"); ?>

    <div class="wrapper">
        <h2>Login</h2>
        <form method="POST">
            <div>
                <label>Username:</label>
                <input type="text" name="user_name" value="" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="user_password" value="" required>
            </div>
            <div>
                <label>Your role:</label>
                <select name="user_role" id="user_role" required>
                    <option value="" selected disabled hidden>- Choose here -</option>
                    <option value="2">Player</option>
                    <option value="1">Gamemaster</option>
                    <option value="0">Admin</option>
                </select>
            </div>
            <button name="submit" type="submit">login</button>
        </form>
    </div>
</body>
</html>