<?php
include 'config.php';
$name_id=$_GET['name_id'];
$query = "SELECT name, middle_name, last_name,street,city,classification,race,missing_since,sex,age,height_weight,
text_1,text_2,text_3,text_4,text_5,text_6,text_7,gmail
FROM records_app WHERE id =  $name_id";
$query_run = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_run);
$name = $data['name'];
$middle_name = $data['middle_name'];
$last_name = $data['last_name'];
$street = $data['street'];
$city = $data['city'];
$classification = $data['classification'];
$race = $data['race'];
$missing_since = $data['missing_since'];
$sex = $data['sex'];
$age = $data['age'];
$height_weight = $data['height_weight'];

$text_1 = $data['text_1'];
$text_2 = $data['text_2'];
$text_3 = $data['text_3'];
$text_4 = $data['text_4'];
$text_5 = $data['text_5'];
$text_6 = $data['text_6'];
$text_7 = $data['text_7'];
$gmail = $data['gmail'];


$query = "SELECT images FROM records_app WHERE id =  $name_id";
$query_run = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_run);

$res = $data['images'];

$res = explode(" ", $data['images']);
 $count=count($res)-1;
$imageUrls = array();
for($i=0;$i<$count;++$i)
for ($i = 0; $i < $count; $i++) {
    $imageUrl = "upload/" . $res[$i];
    $imageUrls[] = $imageUrl;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Date of Case : <?php echo $name; ?> <?php echo $last_name; ?></title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
  .fakeimg {
    height: 5px;
    width: 750px;
    background: #aaa;
  }
  body {
  background: url(BG.jpg);
  overflow: auto;
}
.jumbotron{
  background-color: hsl(4, 51%, 49%);

}
p {
  color:white;
}
#logo{
  margin-left: 260px;
}








  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
   <h1>MISSING<span style="color:red"> IN</span> ACTION</h1>
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
      <a class="navbar-brand" href="#"><i class="fas fa-lock"></i> Missing in Action</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li><a href="#"><i class="fas fa-lock"></i> ADMIN</a></li>
        <li class="active"><a href="homepage.php">Logout</a></li>
        <li><a href="pending_rec.php">Pending Records</a></li>
        <li><a href="RECORDS_APPROVED.php">Approved Records</a></li>
         <li><a href="#">History</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
       <h2 style="color:white;"><?php echo $name; ?> <?php echo $middle_name; ?> <?php echo $last_name; ?></h2>
      <h5 style="color:white;font-size: 20px;">Missing Since: <?php echo $missing_since; ?></h5>
      <div> <?php foreach ($imageUrls as $imageUrl) : ?>
              <img src="<?php echo $imageUrl; ?>" height="150px" width="150px">
              <?php endforeach; ?>
      </div>

      <p style="font-size: 23px;">Missing From: <?php echo $city; ?> ,<?php echo $street; ?></p>
      <p style="font-size: 23px;">Classification: <?php echo $classification; ?></p>
      <p style="font-size: 23px;">Race: <?php echo $race; ?></p>
      <p style="font-size: 23px;"> Height And Weight: <?php echo $height_weight; ?></p>
      <p style="font-size: 23px;">Sex: <?php echo $sex; ?> Age: <?php echo $age; ?> </p>

      <h3 style="color:white;">Some Links</h3>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <center>
      <h2 style="color:white;">MISSING IN ACTION</h2>
      <h5 style="color:white;">MIA, July, 2023</h5>
      </center>
      <div><img id="logo" src="mialogo.png" height="200px" width="400px"></div>
      <p><span style="font-size: 25px;color: red;">Clothing/Jewelry Description :</span><br><span style="font-size: 20px"><?php echo $text_2; ?></span></p>
      <p><span style="font-size: 25px;color: red;">Associated Vehicle(s) :</span><br><span style="font-size: 20px"><?php echo $text_4; ?></span></p>
    <p><span style="font-size: 25px;color: red;">Distinguishing Characteristics :</span><br><span style="font-size: 20px"><?php echo $text_1; ?></span></p>
      <br>
      <h2 style="color:white;">Other Details</h2>
      <h5 style="color:white;">MIA, July, 2023</h5>
      <div class="fakeimg"></div>
      <p><span style="font-size: 25px;color: red;">Details of Disappearance :</span><br><span style="font-size: 20px"><?php echo $text_5; ?></span></p>
      <p><span style="font-size: 25px;color: red;">Medical Conditions :</span><br><span style="font-size: 20px"><?php echo $text_3; ?></span></p>
      <p><span style="font-size: 25px;color: red;">Investigating Agency :</span><br><span style="font-size: 20px"><?php echo $text_6; ?></span></p>
      <p><span style="font-size: 25px;color: red;">Source Information :</span><br><span style="font-size: 20px"><?php echo $text_7; ?></span></p>
      <p><span style="font-size: 25px;color: red;">Update :</span><br><span style="font-size: 20px"><?php echo $gmail; ?></span></p>

       <div>  <p><b style="font-family:verdana;font-size: 30px;">MISSING<span style="color:red;"> IN </span> ACTION</b> <span style="font-size:30px;"></p>
      <p> Donations are accepted but not expected; the site remains free-access to all.<br>
         The Missing in Action is NOT a registered non-profit organization and any donations will NOT be tax-deductible.</p> 
      <h5 style="color:white;">MIA, July, 2023</h5>
      <div class="fakeimg"></div>
      <div><img id="logo" src="mialogo.png" height="200px" width="400px"></div>
                                             </div>

    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p style="color:black">ALL RIGHTS RESERVED 2023</p>
</div>

</body>
</html>