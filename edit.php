<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$name=$_POST['name'];
	$middle_name=$_POST['middle_name'];
	$last_name=$_POST['last_name'];
	$name=$_POST['name'];
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
	$result = mysqli_query($con, "UPDATE test SET name='$name',middle_name='$middle_name',last_name='$last_name',
		suffix='$suffix',sex='$sex',missing_since='$missing_since',city='$city',street='$street',classification='$classification',birthday='$birthday',age='$age',height_weight='$height_weight',race='$race',
		text_1='$text_1',text_2='$text_2',text_3='$text_3',text_4='$text_4',text_5='$text_5',
		text_6='$text_6',text_7='$text_7',



		gmail='$gmail' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: records.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM test WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
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
	<a href="records.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
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
				<td><input type="text" name="height_weight" value=<?php echo $height_weight;?>></td>
			</tr>
			<tr>
				<td>race</td>
				<td><input type="text" name="race" value=<?php echo $race;?>></td>
			</tr>
			<tr>
				<td>text1</td>
				<td><input type="text" name="text_1" value=<?php echo $text_1;?>></td>
			</tr>
			<tr>
				<td>text2</td>
				<td><input type="text" name="text_2" value=<?php echo $text_2;?>></td>
			</tr>
			<tr>
				<td>text3</td>
				<td><input type="text" name="text_3" value=<?php echo $text_3;?>></td>
			</tr>
			<tr>
				<td>text4</td>
				<td><input type="text" name="text_4" value=<?php echo $text_4;?>></td>
			</tr>
			<tr>
				<td>text5</td>
				<td><input type="text" name="text_5" value=<?php echo $text_5;?>></td>
			</tr>
			<tr>
				<td>text6</td>
				<td><input type="text" name="text_6" value=<?php echo $text_6;?>></td>
			</tr>
			<tr>
				<td>text7</td>
				<td><input type="text" name="text_7" value=<?php echo $text_7;?>></td>
			</tr>










			<tr>
				<td>Gmail</td>
				<td><input type="text" name="gmail" value=<?php echo $gmail;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>