<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="post">
    username:<br>
    <input type="text" name="name"><br>
    password:<br>
    <input type="password" name="password"><br>
    <input type="submit" name="register" value="register"></form>
</body>
</html>

<?php 
    if(isset($_POST["register"])){

        if(!empty($_POST["name"]) &&
           !empty($_POST["password"])){

            $_SESSION["name"] = $_POST["name"];
            $_SESSION["password"] = $_POST["password"];
            
            header("Location: ../models/register.php");
        }
        else {
            echo"Missing a username or password<br>";
        }
    }
    
?>