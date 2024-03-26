<?php
include("database_connection.php");

$data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'];
    $description = $data['password'];

    $sql = "INSERT INTO name (name, password) VALUES ('$name', '$password')";

    if ($conn->query($sql) == TRUE) {
        echo json_encode(array("message" => "New record created sucessfully"));
    } else {
        echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
    }

    $conn->close();