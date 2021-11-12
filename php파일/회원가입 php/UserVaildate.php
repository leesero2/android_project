<?php
  &con = mysqli_connect("localhost","root","자신의 비밀번호","android");
  $userID = $_POST["userID"];

  $statement = mysqli_prepare($con, "SELECT * FROM USER WHERE userID = ?");
  mysqli_stmt_bind_param($statement, "s", $userID);
  mysqli_stmt_execure($statement);
  mysqli_stmt_store_result($statement, $userID);

  $response = array();
  $response["success"] = true;

  while(mysqli_stmt_fetch($statement)){
    $response["success"] = false;
    $response["userID"] = $userID;
  }
  
  echo json_encode($response);

 ?>
