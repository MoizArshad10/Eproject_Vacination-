<?php
include('connection.php');
$id = $_GET['ID'];
$query = "delete from category where ID='$id'";
$res = mysqli_query($con, $query);
if ($res) {
    echo "<script>alert('Deleted Succesfully');window.location.href='cat_show.php'</script>";
} else {
    echo mysqli_error($con);
}
