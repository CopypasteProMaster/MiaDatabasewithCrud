<?php
include 'config.php';
$searchKey = isset($_GET['search']) ? $_GET['search'] : '';

if (empty($searchKey)) {
    // Display all records
    $result = mysqli_query($con, "SELECT * FROM users");
} else {
    // Perform the search
    $sql = "SELECT * FROM `users` 
        WHERE user_name LIKE '%$searchKey%' OR 
        NAME LIKE '%$searchKey%'";
    $result = mysqli_query($con, $sql);
}
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo '
        <div class="tb" >
            <table width="80%" border="0">
                <tr bgcolor="black;">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>LastName</th>
                    <th>Police ID Number</th>
                </tr>';

        while ($res = mysqli_fetch_assoc($result)) {
            echo '
            <tr>
            <td>' . $res['id'] . '</td>
            <td>' . $res['user_name'] . '</td>
            <td>' . $res['NAME'] . '</td>
            <td>' . $res['EMAIL'] . '</td>
            <td><a href="edit_userss.php?id='.$res['id'].'">Edit</a> | <a href="delete_approved_rec.php?id='.$res['id'].'"onClick="return confirm(\'Are you sure you want to delete?\')"">delete</a></td></td>
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