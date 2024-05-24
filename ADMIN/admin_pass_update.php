<?php
session_start();
include('connection.php');
if (isset($_POST['sub'])) {
    $id = $_POST['hidden_id'];

    $pass = $_POST['pass'];
    $q = "update users set PASSWORD = '$pass' where ID = '$id'";
    $res = mysqli_query($con, $q);
    if ($res) {
        $ids = $_SESSION['USER_NAME'];
        echo "<script>alert('Password Updated Successfully');window.location.href='backprofile.php?id=$ids'</script>";
    } else {
        echo mysqli_error($con);
    }
}
