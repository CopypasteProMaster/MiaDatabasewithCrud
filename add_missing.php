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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Case</title>
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
  margin-left: 258px;
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
       <a class="navbar-brand" href="#"><i class="fas fa-lock"></i>Missing In Action</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li><a href="#"><i class="fas fa-lock"></i> ADMIN</a></li>
        <li><a href="logout.php">Logout</a></li>
         <li ><a href="RECORDS_APPROVED.php">Approved Records</a></li>
        <li><a href="pending_rec.php">Pending Records</a></li>
         <li ><a href="history.php">History</a></li>
         <li class="active"><a href="add_missing.php">Add Case</a></li>
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


      
    
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <center>
      <h2 style="color:white;">MISSING IN ACTION</h2>
      <h5 style="color:white;">MIA, July, 2023</h5></center>
      <div> <img id="logo" src="mialogo.png" height="200px" width="400px">
    </div>
 
      <br>
      
<center>
      
            <p>ssasasasa</p>




            	<form action="" method="POST" enctype="multipart/form-data">
          <label>Name</label>
          <input type="text" class="form-control custom-input" placeholder="name" name="name" required >
          <label>Middle Name</label>
          <input type="text" class="form-control custom-input" placeholder="middle name" name="middle_name"  >
          <label>Last Name</label>
          <input type="text" class="form-control custom-input" placeholder="last name"  name="last_name"  required/>
          <label>City</label>
          <input type="text" class="form-control custom-input" placeholder="City"  name="city"  required/>
          <label>Street</label>
          <input type="text" class="form-control custom-input" placeholder="Street"  name="street"  required/>
          <label>Missing Since</label>
           <input type="date" class="form-control custom-input" name="missing_since" required>
          <label>Suffix :</label>
          <select class="form-control custom-input"  id="suffix" name="suffix" required>
          <option value="Sr.">Sr.</option>
          <option value="Jr.">Jr.</option>
            <option value="III">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="n/a">n/a</option>
        </select>
          <label>Sex :</label><br>
          <select class="form-control custom-input" id="sex" name="sex"  required>
            <option value="male">Male</option>
            <option value="female" >Female</option>     
        </select>
          <label>Birthday</label>
           <input type="date" class="form-control custom-input" name="birthday" required>
           <label>Age</label>
           <input type="number" class="form-control custom-input" placeholder="Age" name="age" required/>
           <label>Height and Weight</label>
           <input type="text" class="form-control custom-input" placeholder="Height and weight"  name="height_weight"  required/>
           <label>Race</label>
           <input type="text" class="form-control custom-input" placeholder="race" name="race" required/>
            <label>Classification :</label>
           <select id="classification" class="form-control custom-input" name="classification" >
            <option value="Endangered Missing">Endangered Missing</option>
            <option value="Missing" selected>Missing</option>
            <option value="Family Abduction">Family Abduction</option>
            <option value="Non-Family Abduction">Non-Family Abduction</option>
            <option value="Lost/Injured Missing">Lost/Injured Missing</option>
            <option value="Endangered Runaway">Endangered Runaway</option>
            <option value="Migrant">Migrant</option>
             </select>




           <div class="container_1">
           <label>Distinguishing Characteristics:</label>
           <textarea  rows="1" cols="10" id="text_1"  name="text_1"  class="form-control custom-input" placeholder="put n/a if none"  name="text_1" required></textarea>
           <label> Clothing/Jewelry Description:</label>
           <textarea  rows="1" cols="10" id="text_2"  name="text_2"  class="form-control custom-input"  name="text_2" placeholder="put n/a if none" required></textarea>
           <label>Medical Conditions:</label>
           <textarea rows="1" cols="10" class="form-control custom-input" id="text_3"  name="text_3" placeholder="put n/a if none" required></textarea>
           <label> Associated Vehicle(s):</label>
           <textarea  rows="4" cols="10" class="form-control custom-input" id="text_4"  name="text_4" placeholder="put n/a if none" required></textarea>
           <label>Details of Disappearance: </label>
           <textarea  rows="4" cols="100" class="form-control custom-input" id="text_5"  id="text_5"  name="text_5" placeholder="put n/a if none" required></textarea>
           <label>Investigating Agency:</label>
           <textarea  rows="4" cols="10" class="form-control custom-input" id="text_6"  name="text_6" placeholder="put n/a if none" required></textarea>

           <label> Source Information</label>
            <textarea  rows="4" cols="10" class="form-control custom-input" id="text_7"  name="text_7" placeholder="put n/a if none" required></textarea>
           <label>images:</label>
         				<br>
								<input type="file" name="images[]" multiple required/>
								<td>
										  <button class="btn btn-primary" type="submit" name="submit">
										    <i class="bi bi-pencil"></i> Update
										  </button>
										</td>
          </div>

        
        </form>


</center>

    </div>
  </div>
  <br><br><br><br>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>ALL RIGHTS RESERVED 2023</p>
</div>
</body>
</html>

<?php
include "config.php";
if(isset($_POST['submit'])){
	$file='';
	$file_tmp='';
	$location="upload/";
	$data='';
	//============
	$name =$_POST['name'];
	$middle_name =$_POST['middle_name'];
	$last_name =$_POST['last_name'];
	$suffix =$_POST['suffix'];
	//================
	$sex =$_POST['sex'];
	$missing_since= date('Y-m-d',strtotime($_POST["missing_since"]));
	//===========
	$city =$_POST['city'];
	$street =$_POST['street'];
	$classification =$_POST['classification'];
	//===========
	$birthday= date('Y-m-d',strtotime($_POST["birthday"]));
	$age =$_POST['age'];
	$height_weight =$_POST['height_weight'];
	$race =$_POST['race'];
	//=============
	$text_1 =$_POST['text_1'];
	$text_2 = $_POST["text_2"];
	$text_3 = $_POST["text_3"];
	$text_4= $_POST["text_4"];
	$text_5 = $_POST["text_5"];
	$text_6 = $_POST["text_6"];
	$text_7 = $_POST["text_7"];
	$gmail = $_POST["gmail"];
	//=============
	$classification = str_replace("'", "\'",$classification);
	$height_weight = str_replace("'", "\'",$height_weight);
	$name = str_replace("'", "\'",$name);
	$middle_name = str_replace("'", "\'",$middle_name);
	$last_name = str_replace("'", "\'",$last_name);
	$city = str_replace("'", "\'",$city);
	$street = str_replace("'", "\'",$street);
	$race = str_replace("'", "\'",$race);
	$text_1 = str_replace("'", "\'",$text_1);
	$text_2 = str_replace("'", "\'",$text_2);
	$text_3 = str_replace("'", "\'",$text_3);
	$text_4 = str_replace("'", "\'",$text_4);
	$text_5 = str_replace("'", "\'",$text_5);
	$text_6 = str_replace("'", "\'",$text_6);
	$text_7 = str_replace("'", "\'",$text_7);

$name = mysqli_real_escape_string($con, $_POST['name']);
$middle_name = mysqli_real_escape_string($con, $_POST['middle_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);

// Check if the record already exists in the test table
$checkQuery = "SELECT * FROM test WHERE name = '$name' AND middle_name = '$middle_name' AND last_name = '$last_name'";
$result = mysqli_query($con, $checkQuery);

if (mysqli_num_rows($result) > 0) {
    // Record already exists
    echo "<script>alert('Record Cannot be Add because it already exists.');</script>";
} else {


   foreach ($_FILES['images']['name'] as $key => $val) {
        $file = $_FILES['images']['name'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        move_uploaded_file($file_tmp, $location . $file);
        $data .= $file . " ";
    }

    $maxImages = 8; // Set the maximum number of images you want to allow

    if (count($_FILES['images']['name']) > $maxImages) {
        echo "<script>alert('UPLOAD FAILED! You can only upload a maximum of $maxImages images. TRY AGAIN.');</script>";
    } else {
        // Continue with the database insertion code only if the count is within the limit
        $query = "insert into test(images, name, middle_name, last_name, suffix, sex, missing_since, city, street, classification, birthday, age, height_weight, race, text_1, text_2, text_3, text_4, text_5, text_6, text_7, gmail) values ('$data', '$name', '$middle_name', '$last_name', '$suffix', '$sex', '$missing_since', '$city', '$street', '$classification', '$birthday', '$age', '$height_weight', '$race', '$text_1', '$text_2', '$text_3', '$text_4', '$text_5', '$text_6', '$text_7', '$gmail')";
        
        if (count($_FILES['images']['name']) > $maxImages) {
            echo "<script>alert('UPLOAD FAILED! You can only upload a maximum of $maxImages images. TRY AGAIN.');</script>";
        } else {
            $fire = mysqli_query($con, $query);
            if ($fire) {
                echo "<script>alert('Record saved. It will be checked first. We will send an approval to your email, and our team will wait for the police department\'s response after declaring it a case.');</script>";
            } else {
                echo "<script>alert('Failed to save the record.');</script>";
            }
        }
    }
}}
?>