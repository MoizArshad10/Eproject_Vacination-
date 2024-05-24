<?php
include('connection.php');
if (isset($_POST['sub'])) {
    $id = $_POST['hidden_id'];
    $pass = $_POST['pass'];
    $q = "update users set PASSWORD = '$pass' where ID = '$id'";
    $res = mysqli_query($con, $q);
    if ($res) {
        echo "<script>alert('Updated Successfully');window.location.href='index.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
