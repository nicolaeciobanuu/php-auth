<?php

    session_start();

    require 'database.php';

    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
            $user = $results;
        }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php_auth</title>
  </head>
  <body>
    <?php if(!empty($user)): ?>
      <br> Welcome <?= $user['email']; ?>
      <br>You're in!
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h3>Please Login or SignUp</h3>
      <a href="login.php">Login</a> | 
      <a href="register.php">Register</a>
    <?php endif; ?>
  </body>
</html>

