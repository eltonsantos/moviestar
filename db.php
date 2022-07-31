<?php

  session_start();
  // To production
  $db_name = getenv('DB_NAME');
  $db_host = getenv('DB_HOST');
  $db_user = getenv('DB_USER');
  $db_pass = getenv('DB_PASS');
  
  // $db_name = 'moviestar';
  // $db_host = 'localhost';
  // $db_user = 'root';
  // $db_pass = 'root';

  $conn = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);