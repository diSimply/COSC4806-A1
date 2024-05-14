<?php
  session_start();
  $username = $_SESSION['username'];
  $authenticated = $_SESSION['authenticated'];
  if (!$authenticated) {
    // redirect to login page when not authenticated
    header('location: /login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
 <h1>Welcome <?php echo $username ?>, you are in the home page.</h1>
</body>
</html>

