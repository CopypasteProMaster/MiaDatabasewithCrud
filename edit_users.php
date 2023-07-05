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
	




	// update user data
	$result = mysqli_query($con, "UPDATE users SET user_name='$user_name', password='$password',NAME='$NAME',EMAIL='$EMAIL'  WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: acc_s.php");
}

if(isset($_POST['submit']))
{


	//==========
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	$NAME=$_POST['NAME'];
	$EMAIL=$_POST['EMAIL'];

	$query = "INSERT INTO users_approved (user_name, password, NAME, EMAIL)
    VALUES ('$user_name', '$password', '$NAME', '$EMAIL')";
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
    header("Location: acc_s.php");

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

}
?>
<html>
<head>
		<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="jquery.min.js"></script>
	<title>Edit User Data</title>
</head>

<body>
	<header id="myHeader">
    <nav>
      <ul>
         <center id="li_">
        <li><b><a href="login.php">Logout</a></li></b>
        <li><b><a href="crud_for_approve.php">List of Approved Records</a></li></b>
        <li><b><a href="add_missing.php">Add New Case</a></li></b>
        </center>
    </nav>
  </header>
	<center>
	
	<br/><br/>
	<form action="" method="POST">
	<form name="update_user" method="post" action="edit_pending.php">
			<div class="missing">
		<p id="title" style="font-size:40px;font-family:verdana"><b>MISSING<span style="color:red;"> IN </span> ACTION</b></p><br>
		<p  id="p_1" style="color:red;font-size: 30px;">Edit MIA :<?php echo $id;?> </p>
	</div><br><br>
<form action="" method="POST" enctype="multipart/form-data">



<center>
	<div class="details">
		<label>USER NAME :</label><br>
		<input type="text" placeholder="name" name="user_name" value=<?php echo $user_name;?> required ><br>
		<label>PASSWORD :</label><br>
		<input type="text" placeholder="middle name" name="password" value=<?php echo $password;?> ><br>
		<label>NAME :</label><br>
			<input type="text" placeholder="last name"  name="NAME" value=<?php echo $NAME;?>><br>
		<label>Police ID Number  :</label><br>
		<input type="number" placeholder="Police Id Number"  name="EMAIL" value=<?php echo $EMAIL;?> >

		<br><br><br><br><br>
		<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

				<div class="row">
  <div class="col">
    <button class="btn btn-primary" type="submit" name="update">Update</button>
  </div>
  <div class="col">
    <button class="btn btn-success" type="submit" name="submit">Add to Approved Records</button>
  </div>
</div>
	</form>



	<footer id="footer">
    <center><p style="color:white;font-size: 30px;  ">All Rights Reserved 2023.</p></center>
</footer>
</center>


</body>
</html>

<style>
	body {
  background-color: black;
  color: white;
  background:  linear-gradient(rgba(4, 5, 182, 10.7),rgba(-93, 26, -17, 0.5)),url(bc.jpg);
  overflow: auto;
}
	.missing{
		margin-top: 123px;
	}
	#myHeader {
    position: fixed;
    top: 0;
    width: 100%;
    background-color:  rgba(0, 0, 0, 0.5);
    z-index: 100;
  }
  #li_{
    margin-left: 36px;
  }

  #myHeader nav ul {
    list-style-type: none;
    margin: -18px;
    padding: 0;
    overflow: hidden;
    text-align: right; /* Align the links to the right */
  }

  #myHeader nav ul li {
    display: inline-block; /* Display the links in a line */
  }

  #myHeader nav ul li a {
    display: block;
    padding: 29px 16px;
    text-decoration: none;
    color: white;
    font-size: 30px;
  }

  /* Add hover effect to the links */
  #myHeader nav ul li a:hover {
    background-color:    rgba(0, 0, 0, 0.5);; /* Change the background color on hover */
    color:   rgba(0, 0, 0, 0.5);; /* Change the text color on hover */
  }
  
	.details{
		margin-left: 123px;
	}

	.summary{
		margin-left:594px;
	}
	.header{
	margin-left: -2022px;
    margin-top: 50px;
	}
	.header_1{
		margin-left: -1210px;
    margin-top: -263px;
	}
	.header_2{
		margin-left: -530px;
    margin-top: -202px;
	}
	.header_3{
	    margin-left: 98px;
    margin-top: -144px;
	}
	.header_4{
	    margin-left: 736px;
    margin-top: -144px;
	}
	#footer{
	    margin-left: -26px;
    margin-top: 234px;
	}
li {
	color:white;
}
</style>