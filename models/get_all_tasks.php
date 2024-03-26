<?php
include("database_connection.php");

$result = $conn->query("SELECT id, name, status, description, id_user FROM tarefas");

$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);