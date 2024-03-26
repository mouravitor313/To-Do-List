<?php
include("database_connection.php");

$result = $conn->query("SELECT id, name, status, description, id_owner FROM tasks");

$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);