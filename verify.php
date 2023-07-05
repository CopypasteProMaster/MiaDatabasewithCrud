<?php 
session_start(); 
include "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

  function validate($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

  $uname = validate($_POST['uname']);
  $pass = validate($_POST['password']);

  if (empty($uname)) {
    header("Location: login.php?error=User Name is required");
    exit();
  } else if(empty($pass)){
    header("Location: login.php?error=Password is required");
    exit();
  } else {
    $sql = "SELECT * FROM users_approved WHERE user_name='$uname'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if (password_verify($pass, $row['password'])) { // Verify the password
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['NAME']; // Corrected 'name' to 'NAME'
        $_SESSION['id'] = $row['id'];
        header("Location: RECORDS_APPROVED.php");
        exit();
      } else {
        header("Location: login.php?error=Incorrect username or password");
        exit();
      }
    } else {
      header("Location: login.php?error=Incorrect username or password");
      exit();
    }
  }
} else {
  header("Location: login.php");
  exit();
}