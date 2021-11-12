<?php
  &con = mysqli_connect("localhost","root","자신의 비밀번호","android");

  $userID = $_POST["userID"];
  $userPassword = $_POST["userPassword"];
  $userEmail = $_POST["userEmail"];
  $userName = $_POST["userName"];

  $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?,?,?,?)");
  mysqli_stmt_bind_param($statement, "ssss", $userID, $userPassword, $userEmail, $userName);
  mysqli_stmt_execure($statement);

  $response = array();
  $response["success"] = true;

  echo json_encode($response);

 ?>
