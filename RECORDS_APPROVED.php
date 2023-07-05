<?php
include 'config.php';
$query = "SELECT name, last_name,street,city,classification,race FROM records_app WHERE id = 22";
$query_run = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_run);
$name = $data['name'];
$last_name = $data['last_name'];
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

date_default_timezone_set("Asia/Manila");
include 'config.php';
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    // Existing code...
    $user_name = $_SESSION['user_name'];
    $login_date = date('Y-m-d H:i:s');
    $query = "INSERT INTO history (history_, login_date) VALUES ('$user_name Logged in', '$login_date')";
    mysqli_query($con, $query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
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
p{
  color:white;
}

.container {
    width: 1285px;
    height: 1200px;
}
#logo{
  margin-left: 181px;
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
        <li><a href="logout.php">Logout</a></li>
         <li class="active"><a href="RECORDS_APPROVED.php">Approved Records</a></li>
        <li><a href="pending_rec.php">Pending Records</a></li>
         <li><a href="history.php">History</a></li>
         <li><a href="add_missing.php">Add Case</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2 style="color:white;">Hello Admin  <?php echo $_SESSION['user_name']; ?></h2>
      <h5 style="color:white;"><?php echo $name; ?> <?php echo $last_name; ?></h5>
      <div> <img src="<?php echo $imageUrl; ?>" height="300px" width="400px"></div><br>
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
      <div> <img id="logo" src="mialogo.png" height="400px" width="800px"></div>
    
          <?php 
                if (isset($_POST['search'])) {
                    $searchKey = $_POST['search'];
                    $sql = "SELECT * FROM records_app WHERE name LIKE '%$searchKey%'";
                } else {
                    $sql = "SELECT * FROM records_app";
                    $searchKey = "";
                }

                $sql = "SELECT * FROM `records_app` 
                    WHERE name LIKE '%$searchKey%'";

                $result = mysqli_query($con, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '
                        <div class="container_1">
                        <div class="search_"> <label style="color:white;">Search :<input type="text" style="color:black"  class="holder" id="search" name="search"></label></div>
                    <div class="gutters-sm1">
                    <div id="search-results" ></div>

                    <div id="table-results"></div>
                    

                    </div>
                    </div>';
                    } else {
                        echo '
                        <table id = "tablenone" width="80%" border="0">
        <tr bgcolor="black;">
        <th>Designation</th>
        <th>Name</th>
        <th>MidName</th>
        <th>LastName</th>
        <th>Update</th>
    </tr>
    <tr>
    <td></td>
    </tr>

    </div>
                        
                        ';

                    }


                }
                ?>


   
  </div>
</div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>ALL RIGHTS RESERVED 2023</p>
</div>

</body>
</html>
 <script>

    function searchRecords() {
    var searchKey = document.getElementById("search").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("search-results").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "RECORDS_AJAX.php?search=" + searchKey, true);
    xhttp.send();
}

function initializeSearch() {
    document.getElementById("search").addEventListener("input", searchRecords);
    searchRecords();
}

window.addEventListener("DOMContentLoaded", initializeSearch);
</script>