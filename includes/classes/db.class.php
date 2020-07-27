<?php
  class db {

      // MySQL db params
    private $servername = 'XXXXXXXXX';
    private $username = 'XXXXXXXXX';
    private $password = 'XXXXXXXXX';
    private $dbName = 'XXXXXXXXX';
    protected $companiesTable = 'companies';
    protected $viewsTable = 'views';
    protected $sharesTable = 'shares';

      // MySQL connect function
    protected function connect() {
      $connect = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
      return $connect;
    }
  }
?>
