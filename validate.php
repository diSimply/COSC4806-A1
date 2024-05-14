<?php
  session_start();

  $valid_username = "diana";
  $valid_password = "1234";
  
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  
  echo "Username " . $username . " Password " . $password;
  if ($username == $valid_username && $password == $valid_password) {
    echo "Success";
  } else {
    echo "Failed";
  }

?>