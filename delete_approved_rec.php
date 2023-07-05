<?php
//including the database connection file
include("config.php");
//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$result = mysqli_query($con, "DELETE FROM test WHERE id=$id");
//redirecting to the display page (index.php in our case)
header("Location:pending_rec.php");
?>
<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($con, "DELETE FROM records_app WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:RECORDS_APPROVED.php");
?>

<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($con, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:pending_acc.php");
?>