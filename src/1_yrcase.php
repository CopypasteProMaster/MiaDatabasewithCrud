<?php
include 'config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="1_yrcase.css">
    <title>Alphabetical Search</title>
</head>
<body>

<p id="title" style="font-size:30px;font-family:verdana"><b>MISSING<span style="color:red;"> IN </span> ACTION</b></p>
<br><br><br><br><br><br>
<p  style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Alphabetical Case</b></p>
<p> This is the records missing for more less 1 year &nbsp;&nbsp;&nbsp;&nbsp; <a href="http://localhost:8080/testmia/searchcase.php">See >1 year</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://localhost:8080/testmia/reviewed.php">See Approved and reviewed but not Authorized by Authorities</a></p>


<!---->
<!---->
<div class="dropdown"> 
      <button class="dropbtn">
        <span style="font-size:36px;cursor:pointer;" onclick="openNav()">&#9776;</span></button>
      <div class="dropdown-content">
          <a href="http://localhost:8080/testmia/as.php">About</a>
          <a href="http://localhost:8080/testmia/as.php">Services</a>
          <a href="http://localhost:8080/testmia/advance_add.php">Advanced Add</a>
          <a href="http://localhost:8080/testmia/homepage.php">Homepage</a>
   <button><a id="btn" onclick="dtow()">Dark mode</a></button>
      </div>
 </div>



 <!---->


    <!---->
    <?php 
    //$connection = mysqli_connect('localhost','root','','multiple');
    if(isset($_POST['search'])){
        $searchKey = $_POST['search'];
        $sql="SELECT * FROM test WHERE name LIKE '%$searchKey%'  or middle_name LIKE '%$searchKey%' or last_name LIKE '%$searchKey%' ";
    }else{
        $sql="SELECT * FROM test";
        $searchKey = "";
    }
    $sql="Select * from `test` 
                where  name like '%$searchKey%' or 
                last_name like '%$searchKey%'";
                $result=mysqli_query($con,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        echo'
                        <br>
                        <div class="square"></div>
                        
                        <div class = "list">
                        <thead>
                        <tr>
                        <th>ID</th>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <th>Name</th>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <th>Middle Name</th>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <th>Last Name</th>
                        </tr></thead>
                        </div>'
                        ;

                        while($row=mysqli_fetch_assoc($result)){
                        echo'
                        <div class="records">
                
                        <tbody>
                        <tr>
                        <td><a href="dateofcase_edited.php?name_id='.$row['id'].'">'.$row['id'].'</a></td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td>'.$row['name'].'</td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td>'.$row['middle_name'].'</td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td>'.$row['last_name'].'</td>
                        </tr>
                        </tbody></div><br>
                        ';}

                    }else{
                        echo '<h2> Data not Found</h2>';
                    }
                }

    //$sql="SELECT * FROM test";
    $result = mysqli_query($con,$sql);
    ?>
    <form action="" method="POST">
        <div class="s_engine">
        <input type="text" name="search" value="<?php echo $searchKey; ?>">
        <button>Search</button>

    </div>

    <!---->
    <div class="header">
<p style="color:red;">Case Searches&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case Updates&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resources&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Legal</p>
  <p style="font-family:verdana; font-size:15px;">
    Advanced Search &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Updates&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;
    About Crispin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    SLPR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Criteria<br><br>
    Alphabetical Cases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Updates Archieves&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Blog&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    FPFMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Corpus Delicti<br><br>Chronological Cases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resolved<br><br>Geographical Cases<br><br>

</p>

  <p><b style="font-family:verdana">MISSING<span style="color:red;"> IN </span> ACTION</b> <span style="font-size:12px;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Donations are accepted but not expected; the site remains free-access to all.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  The Missing in Action is NOT a registered non-profit organization and any donations will NOT be tax-deductible.</p>
  </p> 
 </span></p>
  

</div>
</form>
<!---->


<!---->
<script>
/*dark and lightmode*/
function dtow() {
var element = document.body;
element.classList.toggle("dark-mode");}
const btn = document.getElementById('btn');

//Toggle button text on click
btn.addEventListener('click', function handleClick() {
const initialText = 'Dark mode';
if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
btn.textContent = 'Light mode';} else {btn.textContent = initialText;}});

/*====*/

function openNav() {
  document.getElementById("dropdown").style.width = "250px";
  document.getElementById("dropbtn").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("dropdown").style.width = "0";
  document.getElementById("dropbtn").style.marginLeft= "0";
}

//============//
</script>
</body>
</html>