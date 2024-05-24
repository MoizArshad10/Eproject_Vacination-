<?php
include('connection.php');
if (isset($_POST['sub'])) {
    $user_id = $_POST['user_id_fk'];
    $vacc_id = $_POST['vaccine_id_fk'];
    $status = $_POST['status'];
    $hospital_name = $_POST['hospital'];
    $q = "INSERT INTO `vaccine_availability`(USER_ID_FK, VACCINE_ID_FK, `STATUS`, HOSPITAL)
     VALUES ('$user_id','$vacc_id','$status','$hospital_name')";
    $res = mysqli_query($con, $q);
    if ($res) {
        echo "<script>alert('Vaccine Availability Inserted');window.location.href='vacc_availability_show.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
