<?php 
include 'config.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dataofcase_edited.css">
	<title>Date of Case</title>
</head>
<body>
<p id="title" style="font-size:30px;font-family:verdana">&nbsp;&nbsp;&nbsp;<b>MISSING<span style="color:red;"> IN </span> ACTION</b></p>
<div class="dropdown"> 
      <button class="dropbtn">
        <span style="font-size:36px;cursor:pointer;" onclick="openNav()">&#9776;</span></button>
      <div class="dropdown-content">
          <a href="http://localhost/mia/as.php">About</a>
          <a href="http://localhost/mia/as.php">Services</a>
  <a href="http://localhost/testmia/searchcase.php">Aplhaberical Cases</a>
  <a href="http://localhost/testmia/advance_add.php">Advance Add</a>
  <a href="http://localhost/testmia/homepage.php">Homepage</a>
  <button><a id="btn" onclick="dtow()">Dark mode</a></button></div></div>

  <!---->
  	<?php
  	$name_id=$_GET['name_id'];
	$i= "";
	$query="select images from records_app where id=$name_id";
	$query1="SELECT * FROM records_app where id=$name_id";
	$query_run = mysqli_query($con,$query1);
	$fire=mysqli_query($con,$query);
	$data=mysqli_fetch_array($fire);
	//print_r($res);
	$res=$data['images'];
	$res=explode(" ",$res);
	//print_r($res);
	$count=count($res)-1;
	$sql="Select * from `records_app` where id=$name_id ";
	$result=mysqli_query($con,$sql);
	if($result){
		$row=mysqli_fetch_assoc($result);}
//====================
	$sql="Select * from `records_app` where id=$name_id";
	$result=mysqli_query($con,$sql);
	if($result){
		$row=mysqli_fetch_assoc($result);
		echo '<b><h1 style="font-size: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['name'].'
		&nbsp;&nbsp;&nbsp;&nbsp;'.$row['middle_name'].'
		&nbsp;&nbsp;&nbsp;&nbsp;'.$row['last_name'].'</b></h1>
		<br><br><div class="bio"><p style="color:red;font-size:20px;">Missing Since</p>'.$row['missing_since'].'
		<p style="color:red;font-size:20px;">Missing From</p>'.$row['city'].'&nbsp;'.$row['street'].
	    '<p style="color:red;font-size:20px;">Classification</p>'.$row['classification'].'
	     <p style="color:red;font-size:20px;">Sex</p>'.$row['sex'].
		'<p style="color:red;font-size:20px;">Race</p>'.$row['race'].
		'<p style="color:red;font-size:20px;">Age</p>'.$row['age'].'
		</div>
		<br><br><div class="o_c"><p style="color:red;font-size:20px;">Height and Weight</p>'.$row['height_weight'].'
		<p style="color:red;font-size:20px;">Clothing/Jewelry Description</p>'.$row['text_2'].
	    '<p style="color:red;font-size:20px;">Associated Vehicle(s)</p>'.$row['text_4'].
		'<p style="color:red;font-size:20px;">Distinguishing Characteristics</p>'.$row['text_1'].'
		</div>
		<div class="details">
		<br><br><br><br><br><br><br>	
		<p style="color:red;font-size:20px;">Details of Disappearance</p>'.$row['text_5'].'
	    <p style="color:red;font-size:20px;">Medical Conditions</p>'.$row['text_3'].'
		<p style="color:red;font-size:20px;">Investigating Agency</p>'.$row['text_6'].'
		<p style="color:red;font-size:20px;">Source Information</p>'.$row['text_7'].'
		<br><br>
		<div class="square_1"></div><br>
		<p style="color:red;">Case Searches&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case Updates&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resources&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Legal</p>
		<p style="font-family:verdana; font-size:15px;">
  	Advanced Search &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	Updates&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	About Crispin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	SLPR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;
  	Criteria<br><br>
  	Alphabetical Cases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	Updates Archieves&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	Blog&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	FPFMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	Corpus Delicti<br><br>
  	Chronological Cases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	Resolved<br><br>Geographical Cases<br><br></p>
  	<p><b style="font-family:verdana">MISSING<span style="color:red;"> IN </span> ACTION</b> <span style="font-size:12px;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Donations are accepted but not expected; the site remains free-access to all.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  The Missing in Action is NOT a registered non-profit organization and any donations will NOT be tax-deductible.</p></p> </span></p>
  </div>






		';}
	


//====================
echo '<br>';
for($i=0;$i<$count;++$i){
  if($i == 2){
  ?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="upload/<?=$res[$i]?>"height="150px" width="150px";/>
  <br>
  <?php
  }else{
  ?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="upload/<?=$res[$i]?>"height="150px" width="150px";/>
  <?php
  }}
  ?>
<script>
	
/*dark and lightmode*/
function dtow() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
const btn = document.getElementById('btn');

// ✅ Toggle button text on click
btn.addEventListener('click', function handleClick() {
  const initialText = 'Dark mode';

  if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn.textContent = 'Light mode';
  } else {
    btn.textContent = initialText;
  }
});

/*====*/


function openNav() {
  document.getElementById("dropdown").style.width = "250px";
  document.getElementById("dropbtn").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("dropdown").style.width = "0";
  document.getElementById("dropbtn").style.marginLeft= "0";
}





</script>

</body>
</html>