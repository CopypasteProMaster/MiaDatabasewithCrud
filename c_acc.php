<?php //index.php file ?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="" method="POST">
        <h2>Create Account</h2>
  
        <label>UserName</label>
        <input type="text" name="user_name" placeholder="UserName" required><br>


        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required><br>

         <label>Name</label>
        <input type="text" name="NAME" placeholder="User's Name" required><br>

         <label>Police ID Number</label>
        <input type="number" name="police_id" placeholder="Police ID Number " required><br>

         <label>Yahoo Mail</label>
        <input type="gmail" name="EMAIL" placeholder="Yahoo Mail " required><br>



       <input type="submit" name="submit" value="submit"/>
        <a  style="color:white" href="login.php">back</a>

     </form>
     <footer id="footer">
    <center><p style="color:white;">All Rights Reserved 2023.</p></center>
</footer>


<?php
include "config.php";
if(isset($_POST['submit'])){
  $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt the password
  $NAME = mysqli_real_escape_string($con, $_POST['NAME']);
  $EMAIL = mysqli_real_escape_string($con, $_POST['EMAIL']);
  $police_id = mysqli_real_escape_string($con, $_POST['police_id']);

  $query = "INSERT INTO users (user_name, password, NAME, EMAIL, police_id) VALUES ('$user_name', '$password', '$NAME', '$EMAIL','$police_id')";

  // Check if the record already exists in the test table
  $checkQuery = "SELECT * FROM users WHERE user_name = '$user_name' AND NAME = '$NAME' AND EMAIL = '$EMAIL'";
  $result = mysqli_query($con, $checkQuery);

  if (mysqli_num_rows($result) > 0) {
    // Record already exists
    echo "<script>alert('Record cannot be added because it already exists.');</script>";
  } else {
    $fire = mysqli_query($con, $query);
    if ($fire) {
      echo "<script>alert('Record saved. It will be checked first. We will send an approval to your email, and our team will wait for the police department\'s response.');</script>";
    } else {
      echo "<script>alert('Failed to save the record.');</script>";
    }
  }
}

?>






















<style>
body {
  background-color: black;
  color: white;
  background:  linear-gradient(rgba(0, 0, 50, 0.7),rgba(0, 0, 0, 0.5)),url(bc.jpg);
  overflow: auto;
   display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}
*{
    font-family: sans-serif;
    box-sizing: border-box;
}

form {
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background: black;
    border-radius: 15px;
}

h2 {
    text-align: center;
    margin-bottom: 40px;
}

input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}
label {
    color: #888;
    font-size: 18px;
    padding: 10px;
}

button {
    float: right;
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}
button:hover{
    opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
    text-align: center;
    color: #fff;
}

a {
    float: right;
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
    text-decoration: none;
}
a:hover{
    opacity: .7;
}




#footer{

    margin-top: 164px;
  }
</style>
</body>
</html>