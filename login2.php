<?php
include 'config.php';
$query = "SELECT name, last_name,street,city,classification,race FROM records_app WHERE id = 54";
$query_run = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_run);
$name = $data['name'];
$lastName = $data['last_name'];
$street = $data['street'];
$city = $data['city'];
$classification = $data['classification'];
$race = $data['race'];

$query = "SELECT images FROM records_app WHERE id = 54";
$query_run = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_run);
$res = $data['images'];
$res = explode(" ", $res);
$imageUrl = "upload/" . $res[0];
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
      <a class="navbar-brand" href="login.php">Missing In Action</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">ADMIN</a></li>
        <li><a href="#"><i class="fas fa-lock"></i> Approved Records</a></li>
        <li><a href="#"><i class="fas fa-lock"></i> Pending Records</a></li>
        <li><a href="#"><i class="fas fa-lock"></i> History </a></li>
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
      <p style="font-size: 23px;">Address: <?php echo $city; ?> , <?php echo $street; ?></p>
      <p style="font-size: 23px;">Classification: <?php echo $classification; ?></p>
      <p style="font-size: 23px;">Race: <?php echo $race; ?></p>


      
      <h3 style="color:white;">Some Links</h3>
      <p>Of missing of the Month</p>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="login.php">Missing-1</a></li>
        <li class="active" ><a href="login2.php">Missing-2</a></li>
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
      <form action="verify.php" method="post">
        <h2 style="color:white;">LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label style="color:white;">User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label style="color:white;">User Name</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
       
        <a  style="color:white;font-size: 20px;" href="c_acc.php">Create Account</a>
     </form>
</center>
<p><br><br><br><br><br><br>This page allows login access exclusively for authorized authorities with permission accounts. 
We prioritize security by implementing stringent protocols to ensure that only authorized individuals can log in. 
This involves a two-step verification process. These measures protect sensitive data and maintain the highest standards of security.
<br><br><br><br><br><br></p>
    </div>
  </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>ALL RIGHTS RESERVED 2023</p>
</div>
</body>
</html>