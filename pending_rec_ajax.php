<?php
include 'config.php';
$searchKey = isset($_GET['search']) ? $_GET['search'] : '';
if (empty($searchKey)) {
    // Display all records
    $result = mysqli_query($con, "SELECT * FROM test");
} else {
    // Perform the search
    $sql = "SELECT * FROM `test` 
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
                    <th>Designation</th>
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
            <td><a href="edit_pending_rec.php?id='.$res['id'].'">Edit</a> | <a href="view_pending_rec.php?name_id='.$res['id'].'">View</a> | <a href="delete_approved_rec.php?id='.$res['id'].'"onClick="return confirm(\'Are you sure you want to delete?\')"">delete</a></td></td>


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
                </div> ';
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