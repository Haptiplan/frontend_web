<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=haptiplan', 'root', '');
 
if(isset($_SESSION['login'])) {
    $user_name = $_POST['user_name'];
    $user_passwort = $_POST['user_passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM users WHERE user_name = :user_name");
    $result = $statement->execute(array('user_name' => $user_name));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($user_passwort, $user['user_passwort'])) {
        $_SESSION['user_id'] = $user['user_id'];
        if($user['user_role'] === 1) {
            die('Login erfolgreich. Weiter zu <a href="./create_machine.php">Maschinen erstellen</a>');
        } elseif($user['user_role'] === 2){
            die('Login erfolgreich. Weiter zu <a href="./add_machine.php">Maschinen verwalten</a>');
        }
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
    
}
?>
<!DOCTYPE html> 
<html> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="../styles/procurement.css">
    </head> 
    <body>
        <?php include_once('header.php'); ?>
        <h2>Login:</h2>
        <?php 
        if(isset($errorMessage)) {
            echo $errorMessage;
        }
        ?>
 
        <form action="?login=1" method="post">
            Dein Username:<br>
            <input type="user_name" size="40" maxlength="250" name="user_name"><br><br>
 
            Dein Passwort:<br>
            <input type="user_password" size="40"  maxlength="250" name="user_passwort"><br><br>
 
            <input type="submit" value="Anmelden">
        </form> 
    </body>
</html>