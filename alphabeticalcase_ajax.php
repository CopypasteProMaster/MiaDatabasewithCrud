<?php
include 'config.php';

$searchKey = isset($_GET['search']) ? $_GET['search'] : '';

if (empty($searchKey)) {
    // Display all records
    $result = mysqli_query($con, "SELECT * FROM records_app");
} else {
    // Perform the search
    $sql = "SELECT * FROM `records_app` 
        WHERE name LIKE '%$searchKey%' OR 
        last_name LIKE '%$searchKey%'";
    $result = mysqli_query($con, $sql);
}

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo '
        <div class="tb" >
            <table width="80%" border="0">
                <tr bgcolor="black;">
                    <th>ID</th>
                    <th>Name</th>
                    <th>MidName</th>
                    <th>LastName</th>
                    <th>Update</th>
                </tr>';

        while ($res = mysqli_fetch_assoc($result)) {
            echo '
            <tr>
            <td>' . $res['id'] . '</td>
            <td>' . $res['name'] . '</td>
            <td>' . $res['middle_name'] . '</td>
            <td>' . $res['last_name'] . '</td>
                <td><a href="view_records.php?name_id='.$res['id'].'">View</a></td>
            </tr>';

        }

        echo '</table></div><br><br><br><br><br><br><br><br>';
    } else {
        echo '

         <div class="tb">
          
                
                </tr>
                </div>
                <div class="nodata">
                <center>
                <p style="font-size:30px;">NO DATA</p>
                </center>
                </div>
     ';
    }
}
?>

<style>
th {
    font-size: 30px;
}
td {
    color:white;
}
.nodata{
  padding-top:242px;
}
</style>