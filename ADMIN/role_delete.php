<?php
include('connection.php');
$id = $_GET['id'];
$query = "delete from role where ID='$id'";
$res = mysqli_query($con, $query);
if ($res) {
    echo "<script>alert('Deleted Succesfully');window.location.href='role_show.php'</script>";
} else {
    echo mysqli_error($con);
}
