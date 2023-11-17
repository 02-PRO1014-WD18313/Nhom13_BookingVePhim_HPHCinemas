<?php

function pdo_getConcection(){
  $servername = "localhost";
  $username = "root";
  $password = "31072004";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  return null;
}

function execute($sql){
  $sql_args = array_slice(func_get_args(),1);
  $conn = pdo_getConcection();
  $stmt = $conn -> prepare($sql);
  $stmt->execute($sql_args);
}

function query($sql){
  try {
    $conn = pdo_getConcection();
    $stmt = $conn->query($sql);
    $rows = $stmt ->fetchAll();
    return $rows;
  } catch (\Throwable $th) {
    return null;
  }
  return null;
  // $sql_args = array_slice(func_get_args(),1);
  
  
}

function getCount($sql){
  // $sql_args = array_slice(func_get_args(),1);
  $conn = pdo_getConcection();
  $stmt = $conn->query($sql);
  $rows = $stmt ->fetchAll();
  return $rows;
}

function inserted_id($sql){
  $conn = mysqli_connect("localhost", "root", "31072004", "duan1");

// Thực hiện câu lệnh INSERT
  mysqli_query($conn, $sql);

// Lấy ID của bản ghi vừa thêm
  $inserted_id = mysqli_insert_id($conn);

  return $inserted_id;
}


