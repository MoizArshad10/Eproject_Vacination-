
<?php
include('connection.php');
$x = $_GET['id'];
$q = "delete from appointment where ID='$x'";
$res = mysqli_query($con, $q);
if ($res) {
    echo "<script>alert('Delete Succesfully');window.location.href='appointment_show.php'</script>";
} else {
    echo mysqli_error($con);
}

?>