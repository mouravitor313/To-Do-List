<?php 
    session_start();
    include("database_connection.php");

    $name = $_SESSION["name"];
    $query = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if($row > 0){

        $query_id_user = "SELECT id FROM user WHERE name = '$name'";
        $id_user = mysqli_query($conn, $query_id_user);
        $return = mysqli_fetch_array($id_user);
        $_SESSION['id_user'] = $return['id'];
        
        header('Location: ../views/home.php');
    
    }
?>