<?php
include('connection.php');
if (isset($_POST['sub'])) {
    $cat_name = $_POST['cat_name'];
    $details = $_POST['dtls'];
    $id = $_POST['cat_id'];
    $query = "update category set CAT_NAME = '$cat_name',DETAILS='$details' where ID = '$id'";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Updated Successfully');window.location.href='cat_show.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
