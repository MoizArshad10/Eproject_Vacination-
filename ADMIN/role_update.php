<?php
include('connection.php');
if (isset($_POST['sub'])) {
    $id = $_POST['role_id'];
    $role_name = $_POST['role_name'];
    $q = "update role set ROLE_NAME='$role_name' WHERE ID='$id'";
    $res = mysqli_query($con, $q);
    if ($res) {
        echo "<script>alert('Updated Successfully');window.location.href='role_show.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
