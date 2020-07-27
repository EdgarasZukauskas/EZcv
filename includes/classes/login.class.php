<?php

  class login extends db {

      // Function to check login
    public function signIn($id) {
      $page = new page;
      $id = $this -> connect() -> real_escape_string($id);
      $result = $this -> connect() -> query("SELECT * FROM " . $this->companiesTable . " WHERE code= '" . $id . "' ");

      if( mysqli_num_rows($result) == 1 ) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['code'] = $id;
        $communicate = new communication;
        $communicate -> sendSms($data); // if login is successful sends sms to inform that someone logged in
        $page -> showCv($data['code'], $data['name'], $data['text']); // if login is successful calls showCv
      }

      else {
        $page -> showLoginError();  // if login is unsuccessful calls showLoginError
      }

    }

      // Function to display Login page
    public function enterCode() {
      $page = new page;
      $page -> showLogin();
    }

  }

?>
