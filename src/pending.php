<?php
//including the database connection file
include_once("config.php");

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($con, "SELECT * FROM records_app ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
	<p>This is the record of Missing People in pending</p>
     <a href="login.php">Logout</a>
     <a href="records_test.php">Approved</a>
     <a href="http://localhost/testmia/advance_add.php">Add New Data</a>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Gmail</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['gmail']."</td>";	
		//echo "<td><a href=\"edit_pending.php?id=$res[id]\">Edit</a> | <a href=\"delete_pending.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		echo "<td><a href=\"edit_pending.php.php?id=$res[id]\">Edit</a> |<a href=\"pending_view.php?name_id=$res[id]\">view</a>  | <a href=\"delete_pending.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		
	}  
	?>
	</table>
</body>
</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>