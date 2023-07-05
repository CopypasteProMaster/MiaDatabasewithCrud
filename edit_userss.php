<?php
include 'config.php';
$query = "SELECT name, last_name,street,city,classification,race FROM records_app WHERE id = 22";
$query_run = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_run);
$name = $data['name'];
$lastName = $data['last_name'];
$street = $data['street'];
$city = $data['city'];
$classification = $data['classification'];
$race = $data['race'];

$query = "SELECT images FROM records_app WHERE id = 22";
$query_run = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_run);
$res = $data['images'];
$res = explode(" ", $res);
$imageUrl = "upload/" . $res[0];
?>

<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $user_name=$_POST['user_name'];
  $password=$_POST['password'];
  $NAME=$_POST['NAME'];
  $EMAIL=$_POST['EMAIL'];
  $police_id=$_POST['police_id'];
  // update user data
  $result = mysqli_query($con, "UPDATE users SET user_name='$user_name', password='$password',NAME='$NAME',EMAIL='$EMAIL',police_id='$police_id'  WHERE id=$id");

  // Redirect to homepage to display updated user in list
  header("Location: pending_acc.php");
}

if(isset($_POST['submit']))
{
  //==========
  $user_name=$_POST['user_name'];
  $password=$_POST['password'];
  $NAME=$_POST['NAME'];
  $EMAIL=$_POST['EMAIL'];
  $police_id=$_POST['police_id'];

  $query = "INSERT INTO users_approved (user_name, password, NAME, EMAIL,police_id)
    VALUES ('$user_name', '$password', '$NAME', '$EMAIL','$police_id')";
    $id = $_GET['id'];
    $result = mysqli_query($con, $query);

    // Delete data from test table
    $deleteQuery = "DELETE FROM users WHERE id=$id"; // Replace $id with the actual ID of the record to be deleted
    $result = mysqli_query($con, $deleteQuery);
    $to = $EMAIL;
    $subject = "Account Approved";
    $message = "Dear $NAME,\n\nYour account has been approved.";
    $headers = "From: pocoace123@gmail.com"; // Replace with your email address
    mail($to, $subject, $message, $headers);
    // Redirect to homepage to display the newly added user in the list
    header("Location: pending_acc.php");

}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{ 
  $user_name = $user_data['user_name'];
  $password = $user_data['password'];
  $NAME = $user_data['NAME'];
  $EMAIL = $user_data['EMAIL'];
  $police_id=$user_data['police_id'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MIA Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
   body {
  background: url(BG.jpg);
  overflow: auto;
}

.jumbotron{
  background-color: hsl(4, 51%, 49%);

}
#logo{
  margin-left: 144px;
}
p {
    color:white;
}
form {
    width: 527px;
    height: 471px;
    padding: 30px;
    
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

a:hover{
    opacity: .7;
}
  </style>

</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
<h1>MISSING<span style="color:red;"> IN</span> ACTION</h1>
  <p>BUTUAN CITY ONLY</p> 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="homepage.php">Missing In Action</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#"><i class="fas fa-lock"></i> ADMIN</a></li>
        <li><a href="logout.php">Logout</a></li>
         <li ><a href="RECORDS_APPROVED.php">Approved Records</a></li>
        <li><a href="pending_rec.php">Pending Records</a></li>
         <li><a href="history.php">History</a></li>
         <li><a href="add_missing.php">Add Case</a></li>
         <li class="active" ><a href="pending_acc.php">pending ACC's</a></li>
      </ul>
    </div>
  </div>
</nav>
<!---->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2 style="color:white;">Missing of the Month</h2>
      <h5 style="color:white;"><?php echo $name; ?> <?php echo $lastName; ?></h5>
      <div> <img src="<?php echo $imageUrl; ?>" height="300px" width="400px"></div><br>
      <p style="font-size: 23px;">Address: <?php echo $city; ?> ,<?php echo $street; ?></p>
      <p style="font-size: 23px;">Classification: <?php echo $classification; ?></p>
      <p style="font-size: 23px;">Race: <?php echo $race; ?></p>


      
      <h3 style="color:white;">Some Links</h3>
      <p>Of missing of the Month</p>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="login.php">Missing-1</a></li>
        <li><a href="login2.php">Missing-2</a></li>
        <li><a href="login3.php">Missing-3</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <center>
      <h2 style="color:white;">MISSING IN ACTION</h2>
      <h5 style="color:white;">MIA, July, 2023</h5></center>
      <div> <img id="logo" src="mialogo.png" height="400px" width="800px">
    </div>
 
      <br>
      





<center>
      <form action="" method="POST">
  <form name="update_user" method="post" action="edit_pending.php">
      <div class="missing">
    <p id="title" style="font-size:40px;font-family:verdana"><b>MISSING<span style="color:red;"> IN </span> ACTION</b></p><br>
    
  </div><br><br>
<form action="" method="POST" enctype="multipart/form-data">



<center>
  
    <label>USER NAME :</label><br>
    <input type="text" placeholder="name" name="user_name" value=<?php echo $user_name;?> required ><br>
    <label>PASSWORD :</label><br>
    <input type="text" placeholder="middle name" name="password" value=<?php echo $password;?> ><br>
    <label>NAME :</label><br>
      <input type="text" placeholder="last name"  name="NAME" value=<?php echo $NAME;?>><br>
    <label>Yahoo Mail  :</label><br>
    <input type="gmail" placeholder="Yahool Mail"  name="EMAIL" value=<?php echo $EMAIL;?> >
    <label>Police ID  :</label><br>
    <input type="number" placeholder="Police Id Number"  name="police_id" value=<?php echo $police_id;?> >

    <br><br><br><br><br>
    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

  <div class="row">
  <div class="col">
    <button class="btn btn-primary" type="submit" name="update">Update</button>
  </div>
  <div class="col">
    <button class="btn btn-success" type="submit" name="submit">Add to Approved Records</button>
  </div>

  </form>









</center>

    </div>
  </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>ALL RIGHTS RESERVED 2023</p>
</div>
</body>
</html>