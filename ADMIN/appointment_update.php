<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $id = $_POST['app_id'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];
    $q = "UPDATE `appointment` SET `STATUS`='$status',`REMARKS`='$remarks' WHERE ID='$id'";
    $res = mysqli_query($con, $q);
    if ($res) {
        echo "<script>alert('Updated Successfully');window.location.href='appointment_show.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
