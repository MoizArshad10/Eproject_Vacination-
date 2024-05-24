<?php
include('connection.php');
if (isset($_POST['sub'])) {
    $id = $_POST['app_id'];
    $vaccine_id = $_POST['vaccine_id_fk'];
    $status = $_POST['status'];
    $q = "UPDATE `vaccine_availability` SET `VACCINE_ID_FK`='$vaccine_id', `STATUS`='$status' WHERE ID='$id'";
    $res = mysqli_query($con, $q);
    if ($res) {
        echo "<script>alert('Updated Successfully');window.location.href='vacc_availability_show.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
