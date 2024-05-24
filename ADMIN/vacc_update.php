<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $id = $_POST['vacc_id'];
    $category = $_POST['c_id'];
    $vaccine_name = $_POST['vacc_name'];
    $vaccine_dosage = $_POST['dsg'];
    $q = "update vaccine_detail set CAT_ID_FK='$category',VACCINE_NAME='$vaccine_name',`DOSAGE`='$vaccine_dosage' WHERE ID='$id'";
    $res = mysqli_query($con, $q);
    if ($res) {
        echo "<script>alert('Updated Successfully');window.location.href='vacc_show.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
