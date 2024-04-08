<?php
    session_start();
    include("database_connection.php");

    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password FROM user WHERE name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);
        if (password_verify($_POST['password'], $user['password'])) {

            $_SESSION['id_user'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            echo "<p>Sessão iniciada com sucesso como {$_SESSION['username']}</p>";

        } else {

            echo "<p>Utilizador ou password invalidos (senha ta errada). <a href=\"../views/login.php\">Tente novamente</a></p>
            <p>Ou caso não haja uma conta, <a href=\"../views/register.php\">registre-se</a></p>";
        }
    } else {

        echo "<p>Utilizador ou password invalidos (nao achou o nome). <a href=\"../views/login.php\">Tente novamente</a></p>
        <p>Ou caso não haja uma conta, <a href=\"../views/register.php\">registre-se</a></p>";
    }


?>
