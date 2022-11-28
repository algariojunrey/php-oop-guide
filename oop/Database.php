<?php

class Database {

  private $host;
  private $username;
  private $password;
  private $dbName;
  private $conn = null;

  public function __construct($host, $username, $password, $dbName)
  {
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->dbName = $dbName;
    $this->connect();
  }

  public function connect()
  {
    try {
      $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);
    } catch (\Throwable $th) {
      echo 'Error connecting to database...';
    }
  }

  public function fetchAll($sql)
  {
    $res = mysqli_query($this->conn, $sql);
    return mysqli_fetch_all($res) ?? [];
  }
}