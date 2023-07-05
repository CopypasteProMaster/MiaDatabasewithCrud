<?php
include 'config.php'; 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

$result = mysqli_query($con, "SELECT * FROM users ORDER BY id DESC"); 
?>
    <!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="jquery.min.js"></script>
        <title>Employee Records</title>

    </head>
    <body>

        <p id="title" style="font-size:50px;font-family:verdana"><b>MISSING<span style="color:red;"> IN </span> ACTION</b></p>
       

                <?php 
                if (isset($_POST['search'])) {
                    $searchKey = $_POST['search'];
                    $sql = "SELECT * FROM users WHERE NAME LIKE '%$searchKey%'";
                } else {
                    $sql = "SELECT * FROM users";
                    $searchKey = "";
                }

                $sql = "SELECT * FROM `users` 
                    WHERE NAME LIKE '%$searchKey%'";

                $result = mysqli_query($con, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '

                        <div class="search_"> <label>Search :<input type="text" class="holder" id="search" name="search"></label></div>
                    <div class="gutters-sm1">
                    <div id="search-results" ></div>
                    <div id="table-results"></div>
                    

                    </div>
                    </div>';
                    } else {
                        echo '
                        
                        <table id = "yawa" width="80%" border="0">
                        <tr bgcolor="black;">
                        <th>Designation</th>
                        <th>Name</th>
                        <th>MidName</th>
                        <th>LastName</th>
                        <th>Update</th>
                    </tr>
                        
                
                        ';

                    }


                }
                ?>
         
            
        </div>
          <div class="header">
  <span style="color:red;font-size:30px;">Case Searches</span><p style="font-size:20px;">Advanced Search<br><br>Alphabetical Cases<br><br>Chronological Cases<br><br>Geographical Cases</p>
  </div><div class="header_1">
  <span style="color:red;font-size:30px;">Case Updates</span><p style="font-size:20px;">Updates<br><br>Updates Archieves<br><br>Resolved</p>
  </div>
   </div><div class="header_2">
  <span style="color:red;font-size:30px;">Information</span><p style="font-size:20px;">About<br><br>Blog</p>
  </div>
  <div class="header_3">
  <span style="color:red;font-size:30px;">Resources</span><p style="font-size:20px;">SLPR<br><br>FPFMP</p>
  </div>
  <div class="header_4">
  <span style="color:red;font-size:30px;">Legal</span><p style="font-size:20px;">Corpus Delicti</p>
  </div>



  <div class="mia_with_footer">
  <b style="font-family:verdana;font-size: 22px;">MISSING<span style="color:red;"> IN </span> ACTION</b> <span style="font-size:12px;">
    <p style = "font-size: 22px;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Donations are accepted but not expected; the site remains free-access to all.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  The Missing in Action is NOT a registered non-profit organization and any donations will NOT be tax-deductible.</p>
  </p> 
 </span></p>
  </div>







<div class="footer_">
 <footer>
  <br><br><br>
  <p style="color:white;font-size: 22px;"> All Rights Reserved 2023.</p>
</footer>

</div>







</div>
    </body>
    <script>

    function searchRecords() {
    var searchKey = document.getElementById("search").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("search-results").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "acc_ajax.php?search=" + searchKey, true);
    xhttp.send();
}

function initializeSearch() {
    document.getElementById("search").addEventListener("input", searchRecords);
    searchRecords();
}

window.addEventListener("DOMContentLoaded", initializeSearch);

window.onscroll = function() {stickyHeader()};
  
  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;
  var isScrolled = false; // Track if the page has been scrolled
  
  function stickyHeader() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
      isScrolled = true;
    } else {
      header.classList.remove("sticky");
      isScrolled = false;
    }
  
    // Hide background when scrolled to the top
    if (!isScrolled && window.pageYOffset === 0) {
      header.style.backgroundColor = "transparent";
    } else {
      header.style.backgroundColor =  "rgba(0, 0, 0, 0.5)"; // Set the background color here
    }
  }
  
</script>

</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
      <style>
             body {
  background-color: black;
  color: white;
  background:  linear-gradient(rgba(4, 5, 182, 10.7),rgba(-93, 26, -17, 0.5)),url(bc.jpg);
  overflow: auto;
}
            }

            .main-body {
                padding: 0px;
            }
            /* Dropdown Button */


#userhello{
     position: absolute;
    margin: -198px 0px 0px 387px;
}

             #title{
    position: absolute;
    margin: -261px 0px 0px 346px;
}

#yawa{
    position:absolute;
    margin:-567px 0px 0px 294px;
}
/*==============================================*/
#tablenone{
    position: absolute;
    margin: -114px 0px 0px -361px;
}




/*================================*/


.content_1{
  position: absolute;
    margin:-82px 0px 0px 349px;
}
            .search_{
    position: absolute;
    margin: -167px 0px 0px 950px;
}
            

             .holder {
       margin-right: 0px;
    margin-left: 6px;
    margin-top: -30px;
            }

            .gutters-sm1 {
        margin-right: 0px;
        margin-left: 536px;
    margin-top: 541px;

}
#search {
    margin-left: 6px;
    margin-top: -235px;

}

            .tb {
                margin-left: -281px;
    margin-top: 321px;
            }
.notfound{
    position: absolute;
    margin: 0px 0px 0px 0px;
}
 .notfound {
    margin-left: 729px;
    margin-top: -162px;

            }
            
            .hover-link {
                color: green;
                text-decoration: none;
            }

            .hover-link:hover {
                color: red;
                text-decoration: underline;
            }
    #search-results{
         margin-left: 94px;
    margin-top: 49px;
    }  
  .header{
   margin-left: -471px;
    margin-top: 179px;
  }
  .header_1{
   margin-left: 183px;
    margin-top: -263px;
  }
  .header_2{
       margin-left: 679px;
    margin-top: -203px;
  }
  .header_3{
       margin-left: 1095px;
    margin-top: -138px;
  }
   .header_4{
       margin-left: 1477px;
    margin-top: -138px;
  }

  .mia_with_footer{
       margin-top: 159px;
    margin-left: 388px;
  }


.footer_{
    margin-left: 855px;
}


        </style>