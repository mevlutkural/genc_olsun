<?php

use Database\Client;

if (isset($_GET['api'])) {

  @require_once __DIR__ . '/api.php';

} else {

  @require __DIR__ . '/vendor/autoload.php';

  spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
      require $file;
    }
  });


  $client = new Client;

  $client = $client->instance();

  $result = $client->query("SELECT * FROM `internship_postings`")->fetchAll(PDO::FETCH_OBJ);

  echo json_encode($result);
  
}