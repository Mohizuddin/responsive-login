<?php

  $username = $_POST['username'];
  $password = $_POST['password'];

  echo "Hello Mr." .  $username . " Your password is " . $password;
  if ($username == "mohizuddin"){
       header("Location: https://mohizuddin-barati.netlify.app/");
  }
  
 ?>
