<?php
session_start();

require_once ($_SERVER['DOCUMENT_ROOT']."/backend/HaptiPlan/include/database.php");

// Create instance of Database class
//TODO
$db = Database::getInstance();

// Check if user is already logged in, if yes, redirect them
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: add_machine.php");
    exit;
}

// Define variables and initialize with empty values
$user_name = $user_password = "";
$user_name_err = $user_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["user_name"]))){
        $user_name_err = "Bitte gib deinen Username ein";
    } else{
        $user_name = trim($_POST["user_name"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["user_password"]))){
        $user_password_err = "Bitte gib dein Password ein";
    } else{
        $user_password = trim($_POST["user_password"]);
    }

    // Validate credentials
    if(empty($user_name_err) && empty($user_password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, user_name, user_password, user_role FROM users WHERE user_name = ?";

        // Execute the query
        $result = $db->query($sql, array($user_name));

        if($result){
            $row = $result[0];
            $hashed_password = $row['user_password'];
            $user_role = $row['user_role'];
            if(password_verify($user_password, $hashed_password)){
                session_start();
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["user_name"] = $user_name;
                $_SESSION["user_role"] = $user_role;

                // Redirect user based on role
                switch ($user_role) {
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
            } else{
                // Display an error message if password is not valid
                $user_password_err = "Das Password ist falsch";
            }
        } else{
            // Display an error message if username doesn't exist
            $user_name_err = "Es gibt keinen Account mit diesem Username";
        }
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
                <input type="text" name="user_name" value="<?php echo $user_name; ?>">
                <span><?php echo $user_name_err; ?></span>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="user_password" value="<?php echo $user_password; ?>">
                <span><?php echo $user_password_err; ?></span>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>