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
                    <th>USER NAME</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>Update</th>
                </tr>';

        while ($res = mysqli_fetch_assoc($result)) {
            echo '
            <tr>
            <td>' . $res['id'] . '</td>
            <td>' . $res['user_name'] . '</td>
            <td>' . $res['NAME'] . '</td>
            <td>' . $res['EMAIL'] . '</td>
            <td><a href="edit_users.php?id='.$res['id'].'">Edit</a> |<a href="deleteusers.php?id='.$res['id'].'"onClick="return confirm(\'Are you sure you want to delete?\')"">delete</a></td></td>


            </tr>';
        }

        echo '</table></div><br><br><br><br><br><br><br><br>';
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
        ';
    }
}
?>

<style type="text/css">
    th {
        font-size: 22px;
    }
    td {
        font-size: 22px;
    }
</style>
