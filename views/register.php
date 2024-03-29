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
    <input type="text" name="name">
    password:<br>
    <input type="password" name="password">
    <input type="submit" name="register" value="register"></form>
</body>
</html>

<?php 
    if(isset($_POST["register"])){

        if(!empty($_POST["name"]) && !empty($_POST["password"])){

            $_SESSION["name"] = $_POST["name"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: views/home.php");
        }
        else{
            echo"Missing a username or password<br>";
        }
    }
    
?>