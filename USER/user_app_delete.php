<?php
include('connection.php');
$x = $_GET['id'];
$q = "delete from appointment where ID='$x'";
$res = mysqli_query($con, $q);
if ($res) {
    echo "<script>alert('Delete Succesfully');window.location.href='user_appointments.php'</script>";
} else {
    echo mysqli_error($con);
}
