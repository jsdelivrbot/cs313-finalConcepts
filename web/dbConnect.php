<?php
  function get_db(){
    $db = NULL;
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $dbUrl = getenv('DATABASE_URL');
    if (empty($dbUrl)) {
      $dbUrl = "postgres://postgres:doublebass21@localhost:5432/mydb";
    }
    $dbopts = parse_url($dbUrl);
    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');
    try {
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    }
    catch (PDOException $ex) {
      print "<p>error: $ex->getMessage() </p>\n\n";
      die();
    }
     return $db;
  }
  
?>