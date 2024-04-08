<?php
    session_start();
    include("../models/database_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>Minhas Tarefas</h1>
    <form action="home.php" method="post">
        <label for="title">Título da Tarefa:</label>
        <input type="text" id="title" name="title" maxlength="15" required>
        <br>
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea>
        <br>
        <input type="submit" name="add" value="Adicionar Tarefa">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php 

    if(isset($_POST["add"])){

        if(!empty($_POST["title"]) &&
        !empty($_POST["description"])){

            $_SESSION["task_title"] = $_POST["title"];
            $_SESSION["task_description"] = $_POST["description"];
            header("Location: ../models/insert_task.php");
        }
    }

    if(isset($_POST["logout"])){

        session_destroy();
        header("Location: login.php");
    }

    // adicionar para o banco de dados o titulo, descrição e o id do usuario no campo id_user

