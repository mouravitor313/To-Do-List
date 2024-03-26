<?php
include("database_connection.php");

$result = $conn->query("SELECT id, name FROM name");

$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);