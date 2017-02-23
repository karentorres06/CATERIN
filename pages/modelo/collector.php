<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-54-163-230-198.compute-1.amazonaws.com");
define("DB_USER", "shfkjwedxyonwh");
define("DB_PASS", "
765b2cba3685df898b6a16d6ad93a5d989c6d599f905efa16559dd58fba8f783");
define("DB_NAME", "
d6fus44cpcrmnb");


class Collector extends database
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
