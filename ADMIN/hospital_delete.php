<?php
include('connection.php');
$x = $_GET['id'];
$q = "DELETE FROM `hospital` WHERE ID='$x'";
$res = mysqli_query($con, $q);
if ($res) {
    echo "<script>alert('Delete Succesfully');window.location.href='hospital_show.php'</script>";
} else {
    echo mysqli_error($con);
}
