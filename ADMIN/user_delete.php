<?php
include('connection.php');
$i = $_GET['id'];
$q = "delete from users where ID='$i'";
$res = mysqli_query($con, $q);
if ($res) {
    echo "<script>alert('Deleted Succesfully');window.location.href='user_show.php'</script>";
} else {
    echo mysqli_error($con);
}
