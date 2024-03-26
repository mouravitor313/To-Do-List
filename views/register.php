<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
    username:<br>
    <input type="text" name="username">
    password:<br>
    <input type="password" name="password">
    <input type="submit" name="register" value="register"></form>
</body>
</html>

<?php 
    if(isset($_POST["register"])){

        if(!empty($_POST["username"]) && !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");
        }
        else{
            echo"Missing a username or password<br>";
        }
    }
    
?>