<?php

namespace Database;

use PDO;
use PDOException;

class Client
{

  /**
   * @var object
   */
  private object $db;

  /**
   * @var string
   */
  private string $driver;

  /**
   * @var string
   */
  private string $host;

  /**
   * @var string
   */
  private string $dbname;

  /**
   * @var string
   */
  private string $charset;

  /**
   * @var string
   */
  private string $user;

  /**
   * @var string
   */
  private string $password;

  public function __construct()
  {

    $this->driver   = 'mysql';
    $this->host     = 'localhost';
    $this->dbname   = 'genc_olsun';
    $this->charset  = 'utf8';
    $this->user     = 'root';
    $this->password = 'toor';

    $credentials = $this->driver . ':host=' . $this->host . ';dbname=' . $this->dbname . ';charset=' . $this->charset;

    try {
      $this->db = new PDO($credentials, $this->user, $this->password);
    } catch (PDOException $e) {
      //echo $e->getMessage();
      echo 'Veri tabanı patladı hacı!!!!';
    }
  }

  public function instance()
  {
    return $this->db;
  }
}