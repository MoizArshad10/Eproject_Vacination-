<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $parent_id = $_POST['p_id'];
    $child_id = $_POST['cname'];
    $hospital_id = $_POST['h_id'];
    $vaccine_id = $_POST['vacc_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $q = "INSERT INTO appointment(`USER_ID_FK`, `CHILD_ID_FK`, `HOSPITAL_ID_FK`, `VACCINE_ID_FK`, `DATE`, `STATUS`, `TIME`) 
VALUES ('$parent_id','$child_id','$hospital_id','$vaccine_id','$date','Pending','$time')";
    $res = mysqli_query($con, $q);
    if ($res) {
        echo "<script>alert('Inserted Successfully');window.location.href='appointment_form.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
