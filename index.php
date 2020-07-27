<?php

  session_start();

    // Function to auto load classes files by classNames
  spl_autoload_register( function($className) {
    include_once 'includes/classes/'.$className.'.class.php';
  });

  $login = new login;

  if(array_key_exists('id', $_GET)){
    $login -> signIn($_GET['id']);  // if ID is provided  in the url, calls sign in function
  }

  else {
    $login -> enterCode();  // if no, calls login page function
  }

?>
