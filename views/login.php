<html>
<head>
  <title>Login b&aacute;sico com PHP</title>
</head>
<body>
  <form action="../models/verify_user_in_database.php" method="POST">
    <p>Username: <input type="text" name="name" /></p>
    <p>Password: <input type="password" name="password" /></p>
    <p><input type="submit" name="submit" value="Login" /></p>
  </form>
</body>
</html>