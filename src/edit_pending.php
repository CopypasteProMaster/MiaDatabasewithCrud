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
	$height_weight = str_replace("'", "\'",$height_weight);
	$text_1 = str_replace("'", "\'",$text_1);
	$text_2 = str_replace("'", "\'",$text_2);
	$text_3 = str_replace("'", "\'",$text_3);
	$text_4 = str_replace("'", "\'",$text_4);
	$text_5 = str_replace("'", "\'",$text_5);
	$text_6 = str_replace("'", "\'",$text_6);
	$text_7 = str_replace("'", "\'",$text_7);


	// update user data
	$result = mysqli_query($con, "UPDATE records_app SET images='$images',name='$name',middle_name='$middle_name',last_name='$last_name',
		suffix='$suffix',sex='$sex',missing_since='$missing_since',city='$city',street='$street',classification='$classification',birthday='$birthday',age='$age',height_weight='$height_weight',race='$race',
		text_1='$text_1',text_2='$text_2',text_3='$text_3',text_4='$text_4',text_5='$text_5',
		text_6='$text_6',text_7='$text_7',



		gmail='$gmail' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: pending.php");
}


//==========================


if(isset($_POST['add']))
{

	$file='';
	$file_tmp='';
	$location="upload/";
	$data='';

	//==========
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
	$height_weight = str_replace("'", "\'",$height_weight);
	$text_1 = str_replace("'", "\'",$text_1);
	$text_2 = str_replace("'", "\'",$text_2);
	$text_3 = str_replace("'", "\'",$text_3);
	$text_4 = str_replace("'", "\'",$text_4);
	$text_5 = str_replace("'", "\'",$text_5);
	$text_6 = str_replace("'", "\'",$text_6);
	$text_7 = str_replace("'", "\'",$text_7);
	foreach($_FILES['images']['name'] as $key=>$val){
		$file=$_FILES['images']['name'][$key];
		$file_tmp=$_FILES['images']['tmp_name'][$key];
		move_uploaded_file($file_tmp, $location.$file);
		$data .=$file." ";

	}

	// update user data
	$query = "INSERT INTO records (images, name, middle_name, last_name, suffix, sex, missing_since, city, street, classification, birthday, age, height_weight, race, text_1, text_2, text_3, text_4, text_5, text_6, text_7, gmail)
	VALUES('$data', '$name', '$middle_name', '$last_name', '$suffix', '$sex', '$missing_since', '$city', '$street', '$classification', '$birthday', '$age', '$height_weight', '$race', '$text_1', '$text_2', '$text_3', '$text_4', '$text_5', '$text_6', '$text_7', '$gmail')";

	$result = mysqli_query($con, $query);

	// Redirect to homepage to display the newly added user in the list
	header("Location: pending.php");
}






//=======================

?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM records_app WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{	$images = $user_data['images'];
	$name = $user_data['name'];
	$middle_name = $user_data['middle_name'];
	$last_name = $user_data['last_name'];
	$name = $user_data['name'];
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
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="pending.php">Home</a>
	<br/><br/>
<p>when you click add it will be added to "Approved and reviewed but not Authorized by Authorities"</p>
	<form name="update_user" method="post" action="edit_pending.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>Middlename</td>
				<td><input type="text" name="middle_name" value=<?php echo $middle_name;?>></td>
			</tr>
			<tr>
				<td>lastname</td>
				<td><input type="text" name="last_name" value=<?php echo $last_name;?>></td>
			</tr>
			<tr>
				<td>suffix</td>
				<td><input type="text" name="suffix" value=<?php echo $suffix;?>></td>
			</tr>
			<tr>
				<td>sex</td>
				<td><input type="text" name="sex" value=<?php echo $sex;?>></td>
			</tr>
			<tr>
				<td>missingsince</td>
				<td><input type="text" name="missing_since" value=<?php echo $missing_since;?>></td>
			</tr>
			<tr>
				<td>city</td>
				<td><input type="text" name="city" value=<?php echo $city;?>></td>
			</tr>
			<tr>
				<td>street</td>
				<td><input type="text" name="street" value=<?php echo $street;?>></td>
			</tr>
			<tr>
				<td>classification</td>
				<td><input type="text" name="classification" value=<?php echo $classification;?>></td>
			</tr>
			<tr>
				<td>birthday</td>
				<td><input type="text" name="birthday" value=<?php echo $birthday;?>></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" value=<?php echo $age;?>></td>
			</tr>
			<tr>
				<td>heighandweight</td>
				<td><textarea name="height_weight"  ><?php echo $height_weight; ?></textarea></td>
			</tr>
			<tr>
				<td>race</td>
				<td><input type="text" name="race" value=<?php echo $race;?>></td>
			</tr>
			<tr>
				<td>text1</td>
				<td><textarea name="text_1" ><?php echo $text_1; ?></textarea></td>
			</tr>
			<tr>
				<td>text2</td>
				<td><textarea name="text_2" ><?php echo $text_2; ?></textarea></td>
			</tr>
			<tr>
				<td>text3</td>
				<td><textarea name="text_3" ><?php echo $text_3; ?></textarea></td>
			</tr>
			<tr>
				<td>text4</td>
				<td><textarea name="text_4" ><?php echo $text_4; ?></textarea></td>
			</tr>
			<tr>
				<td>text5</td>
				<td><textarea name="text_5" ><?php echo $text_5; ?></textarea></td>
			</tr>
			<tr>
				<td>text6</td>
				<td><textarea name="text_6" ><?php echo $text_6; ?></textarea></td>
			</tr>
			<tr>
				<td>text7</td>
				<td><textarea name="text_7" ><?php echo $text_7; ?></textarea></td>
			</tr>

			<tr>
				<td>Gmail</td>
				<td><input type="text" name="gmail" value=<?php echo $gmail;?>></td>
			</tr>
			<tr>
				<td>images</td>
				<td><textarea name="images" ><?php echo $images; ?></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
				<td><input type="submit" name="add" value="add"></td>
			</tr>
		</table>
	</form>
</body>
</html>