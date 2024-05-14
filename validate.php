<?php
  session_start();

  $valid_username = "diana";
  $valid_password = "1234";
  
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  
  if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['authenticated'] = true;
    $_SESSION['failed_attempts'] = 0;
    $_SESSION['username'] = $username;
    header('location: /');
  } else {
    // check the session variable
    if (isset($_SESSION['failed_attempts'])) {
      // session variable already exists, update it
      $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    } else {
      // session variable does not exist, initialize it
       $_SESSION['failed_attempts'] = 1;
    }
  }

?>