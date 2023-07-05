<?php
// include database connection file
include_once("config.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $images=$_POST['images'];
  $name=$_POST['name'];
  $middle_name=$_POST['middle_name'];
  $last_name=$_POST['last_name'];
  $suffix =$_POST['suffix'];
  //================
  $sex =$_POST['sex'];
  $missing_since= date('Y-m-d',strtotime($_POST["missing_since"]));
  //===========
  $city =$_POST['city'];
  $street =$_POST['street'];
  $classification =$_POST['classification'];
  //save
  $birthday= date('Y-m-d',strtotime($_POST["birthday"]));
  $age=$_POST['age'];
  $height_weight =$_POST['height_weight'];
  $race =$_POST['race'];
  $text_1 =$_POST['text_1'];
  $text_2 = $_POST["text_2"];
  $text_3 = $_POST["text_3"];
  $text_4 = $_POST["text_4"];
  $text_5 = $_POST["text_5"];
  $text_6 = $_POST["text_6"];
  $text_7 = $_POST["text_7"];
  $gmail=$_POST['gmail'];
  $images = str_replace("'", "\'",$images);
  $height_weight = str_replace("'", "\'",$height_weight);
  $text_1 = str_replace("'", "\'",$text_1);
  $text_2 = str_replace("'", "\'",$text_2);
  $text_3 = str_replace("'", "\'",$text_3);
  $text_4 = str_replace("'", "\'",$text_4);
  $text_5 = str_replace("'", "\'",$text_5);
  $text_6 = str_replace("'", "\'",$text_6);
  $text_7 = str_replace("'", "\'",$text_7);
  $height_weight = mysqli_real_escape_string($con, $height_weight);

  // update user data
  $result = mysqli_query($con, "UPDATE records_app SET images='$images', name='$name',middle_name='$middle_name',last_name='$last_name',
    suffix='$suffix',sex='$sex',missing_since='$missing_since',city='$city',street='$street',classification='$classification',birthday='$birthday',age='$age',height_weight='$height_weight',race='$race',
    text_1='$text_1',text_2='$text_2',text_3='$text_3',text_4='$text_4',text_5='$text_5',
    text_6='$text_6',text_7='$text_7',
    gmail='$gmail' WHERE id=$id");

  // Redirect to homepage to display updated user in list
  header("Location: RECORDS_APPROVED.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM records_app WHERE id=$id");
while($user_data = mysqli_fetch_array($result))
{ 
  $images = $user_data['images'];
  $name = $user_data['name'];
  $middle_name = $user_data['middle_name'];
  $last_name = $user_data['last_name'];
  $suffix = $user_data['suffix'];
  $sex = $user_data['sex'];
  $missing_since = $user_data['missing_since'];
  $city = $user_data['city'];
  $street = $user_data['street'];
  $classification = $user_data['classification'];
  $birthday = $user_data['birthday'];
  $age = $user_data['age'];
  $height_weight = $user_data['height_weight'];
  $race = $user_data['race'];
  $text_1 = $user_data['text_1'];
  $text_2 = $user_data['text_2'];
  $text_3 = $user_data['text_3'];
  $text_4 = $user_data['text_4'];
  $text_5 = $user_data['text_5'];
  $text_6 = $user_data['text_6'];
  $text_7 = $user_data['text_7'];
  $gmail = $user_data['gmail'];

$query = "SELECT images FROM records_app WHERE id =  $id";
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
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
p{
  color:white;
}
label {
  color:white;
}

.container {
    width: 1285px;
    height: 1200px;
}
#logo{
  margin-left: 292px;
}

.search_{
    margin-left: 0px;
    margin-top: 0px;
}

#search {
    margin-left: 4px;
    margin-top: -8px;

}

.tb {
   margin-left: 61px;
    margin-top: 28px;
    margin-right: -276px;
  }


  .container_2{
    margin-left: -433px;
  }

.header{
   margin-left: -10px;
    margin-top: -18px;
  }
  .header_1{
       margin-left: 305px;
    margin-top: -251px;
  }
   .header_2{
          margin-left: 603px;
    margin-top: -196px;
  }
  .header_3{
          margin-left: 883px;
    margin-top: -138px;
  }
   .header_4{
      margin-left: 1248px;
    margin-top: -138px;
  }
.custom-input {
    width: 200px;
  }

  .container_1{
     margin-left: 334px;
    margin-top: -772px;
  }

  .col{
    margin-left: 74px;
    margin-top: -103px;
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
      <a class="navbar-brand" href="#"><i class="fas fa-lock"></i> Missing in Action</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li><a href="#"><i class="fas fa-lock"></i> ADMIN</a></li>
        <li class="active"><a href="homepage.php">Logout</a></li>
        <li><a href="#">Pending Records</a></li>
         <li><a href="history.php">History</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2 style="color:white;">Missing of the Month</h2>
      <h5 style="color:white;"><?php echo $name; ?> <?php echo $last_name; ?></h5>
      <div>
        <?php foreach ($imageUrls as $imageUrl) : ?>
              <img src="<?php echo $imageUrl; ?>" height="150px" width="150px">
              <?php endforeach; ?>
      </div><br>
      <p style="font-size: 23px;">Address: <?php echo $city; ?> ,<?php echo $street; ?></p>
      <p style="font-size: 23px;">Classification: <?php echo $classification; ?></p>
      <p style="font-size: 23px;">Race: <?php echo $race; ?></p>
      <h3 style="color:white;">Some Links</h3>
     
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <center>
      <h2 style="color:white;">MISSING IN ACTION</h2>
      <h5 style="color:white;">MIA, July, 2023</h5></center>
      <div> <img id="logo" src="mialogo.png" height="200px" width="400px"></div>
    
        <form action="" method="POST" enctype="multipart/form-data">
          <label>Name</label>
          <input type="text" class="form-control custom-input" placeholder="name" name="name" value=<?php echo $name;?> required >
          <label>Middle Name</label>
          <input type="text" class="form-control custom-input" placeholder="middle name" name="middle_name" value=<?php echo $middle_name;?> >
          <label>Last Name</label>
          <input type="text" class="form-control custom-input" placeholder="last name"  name="last_name" value=<?php echo $last_name;?> required/>
          <label>City </label>
          <input type="text" class="form-control custom-input" placeholder="City "  name="city" value=<?php echo $city;?>    required/>
          <label>Street</label>
          <input type="text" class="form-control custom-input" placeholder="Street"  name="street" value=<?php echo $street;?>  required/>
          <label>Missing Since</label>
           <input type="date" class="form-control custom-input" name="missing_since" value=<?php echo $missing_since;?> required>
          <label>Suffix :<?php echo $suffix;?></label>
          <select class="form-control custom-input"  id="suffix" name="suffix" <?php echo $suffix;?> required>
      <option value="Sr.">Sr.</option>
      <option value="Jr.">Jr.</option>
            <option value="III">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="n/a">n/a</option>
        </select>
          <label>Sex : <?php echo $sex;?></label><br>
          <select class="form-control custom-input" id="sex" name="sex" <?php echo $sex;?> required>
            <option value="male">Male</option>
            <option value="female" >Female</option>     
        </select>
          <label>Birthday</label>
           <input type="date" class="form-control custom-input" name="birthday" value=<?php echo $birthday;?> required>
           <label>Age</label>
           <input type="number" class="form-control custom-input" placeholder="Age" name="age" value=<?php echo $age;?> required/>
           <label>Height and Weight</label>
           <textarea  rows="1" cols="10" id="text_7"  name="height_weight"  class="form-control custom-input" placeholder="put n/a if none" required><?php echo $height_weight; ?></textarea>
           <label>Race</label>
           <input type="text" class="form-control custom-input" placeholder="race" name="race" value=<?php echo $race;?> required/>
            <label>Classification :</label>
           <input type="text" class="form-control custom-input" placeholder="Classification" name="classification" value=<?php echo $classification;?>   required/>

           <div class="container_1">
<label>Distinguishing Characteristics:</label>
<textarea  rows="1" cols="10" id="text_1"  name="text_1"  class="form-control custom-input" placeholder="put n/a if none"  name="text_1" required><?php echo $text_1; ?></textarea>
<label> Clothing/Jewelry Description:</label>
<textarea  rows="1" cols="10" id="text_2"  name="text_2"  class="form-control custom-input"  name="text_2" placeholder="put n/a if none" required><?php echo $text_2; ?></textarea>
<label>Medical Conditions:</label>
<textarea rows="1" cols="10" class="form-control custom-input" id="text_3"  name="text_3" placeholder="put n/a if none" required><?php echo $text_3; ?></textarea>
<label> Associated Vehicle(s):</label>
<textarea  rows="4" cols="10" class="form-control custom-input" id="text_4"  name="text_4" placeholder="put n/a if none" required><?php echo $text_4; ?></textarea>
<label>Details of Disappearance: </label>
<textarea  rows="4" cols="100" class="form-control custom-input" id="text_5"  id="text_5"  name="text_5" placeholder="put n/a if none" required><?php echo $text_5; ?></textarea>
<label>Investigating Agency:</label>
<textarea  rows="4" cols="10" class="form-control custom-input" id="text_6"  name="text_6" placeholder="put n/a if none" required><?php echo $text_6; ?></textarea>
<label> Source Information</label>
<textarea  rows="4" cols="10" class="form-control custom-input" id="text_7"  name="text_7" placeholder="put n/a if none" required><?php echo $text_7; ?></textarea>
<label>update :</label>
 <textarea  rows="4" cols="10" class="form-control custom-input" id="gmail"  name="gmail" placeholder="put n/a if none" required><?php echo $gmail; ?></textarea>
 <label>images:</label>
 <textarea  rows="4" cols="10" class="form-control custom-input" id="images"  name="images" placeholder="put n/a if none" required><?php echo $images; ?></textarea>
</div>

          <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
          <div class="row">
  <div class="col">
    <button class="btn btn-primary" type="submit" name="update">Update</button>
  </div>
</div>

        </form>

  </div>
</div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>ALL RIGHTS RESERVED 2023</p>
</div>

</body>
</html>
 