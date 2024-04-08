<?php
    session_start();
    include("database_connection.php");

    $name = $_SESSION["name"];
    $password = password_hash($_SESSION["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user (name, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $password);

    if ($stmt->execute()) {

        echo json_encode(array("message" => "User created sucessfully!"));
        header("Location: id_user.php");

    } else {
        
        echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
    }

    $conn->close();