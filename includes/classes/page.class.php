<?php

class page extends login {

    // Show Login page when no login info provided
  protected function showLogin(){
    include 'includes/pages/login.page.php';
  }

    // Show Cv page on successful login
  protected function showCv($code, $comapny, $text){
    include_once 'includes/pages/cv.page.php';
  }

    // Show Login page with error message on unsuccessful login
  protected function showLoginError(){
    $error = 1;
    include_once 'includes/pages/login.page.php';
  }

    // Start visitor tracking after successfull Cv page load
  public function track($data){
    if (array_key_exists('companyId', $data)){

      date_default_timezone_set("Europe/Vilnius");
      $date = date("Y-m-d H:i:s");

      $company = $this -> connect() -> real_escape_string($data["company"]);
      $companyId = $this -> connect() -> real_escape_string($data["companyId"]);
      $sessionId = $this -> connect() -> real_escape_string($data["sessionId"]);
      $timeSpent = $this -> connect() -> real_escape_string($data["timeSpent"]);

        // If it is the first time function is called, sql row is created to track first visit
      if( mysqli_num_rows($this -> connect() -> query("SELECT * FROM " . $this->viewsTable . " WHERE sessionId='" . $sessionId . "'" )) == 0 ) {
        $addNewView = $this -> connect() -> query("INSERT INTO " . $this->viewsTable . " (`company`, `viewerId`, `sessionId`, `dateOpened`, `timeSpent`)
                                    VALUES (
                                    '" . $company . "',
                                    '" . $companyId . "',
                                    '" . $sessionId . "',
                                    '" . $date . "',
                                    '" . $timeSpent . "'
                                  )");
      }

        // If function called not the first time in sql it is updated how much time is spent in the web
      else {
        $updateExistingView = $this -> connect() -> query("UPDATE " . $this->viewsTable . " SET
              `dateClosed` = '" . $date . "',
              `timeSpent` = '" . $timeSpent . "'
              WHERE `sessionId` = '" . $sessionId . "'
              ");
      }

    }
  }
}

?>
