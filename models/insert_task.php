<?php
    session_start();
    include("database_connection.php");

    $title = $_SESSION["task_title"];
    $description = $_SESSION["task_description"];
    $id_user = $_SESSION["id_user"];

    $sql = "INSERT INTO tasks (name, description, id_owner) VALUES ('$title', '$description', '$id_user')";

    if ($conn->query($sql) == TRUE) {
        header("Location: ../views/home.php");
    } else {
        echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
    }

    $conn->close();