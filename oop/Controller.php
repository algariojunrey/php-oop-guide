<?php

require 'helper.php';
require 'Database.php';

class Controller {

  public $db;

  public function __construct()
  {
    $this->db = new Database('localhost', 'root', '', 'practice');
  }

  /**
   * Fetch all students function
   */
  public function getStudents()
  {
    $sql = 'SELECT * FROM students';
    return $this->db->fetchAll($sql);
  }

}

session_start();
$controller = new Controller();

if (isset($_POST['save_student'])) {
  // Insert student using controller class
  header("Location: create.php");
  exit(0);
}

if (isset($_POST['update_student'])) {
  // Update student using controller class
}

if (isset($_POST['delete_student'])) {
  // Delete student using controller class
}