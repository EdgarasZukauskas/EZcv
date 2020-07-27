<?php

    // Function to auto load classes files by classNames
  spl_autoload_register( function($className) {
    include_once '../classes/'.$className.'.class.php';
  });

    // Collects data from javascript fetch post
  $data = json_decode(file_get_contents('php://input'), true);

  if (array_key_exists('api', $data)){

    switch ($data['api']) {

        // If fetch is calling for tracking function
      case 'counter':
        $track = new page;
        $track -> track($data);
        break;

        // If fetch is calling for sendSms function
      case 'sendSms':
        $communicate = new communication;
        $communicate -> sendSms($data);
        break;

        // If fetch is calling for sendEmail function
      case 'sendEmail':
        $communicate = new communication;
        $communicate -> sendEmail($data);
        break;
    }

  }

?>
