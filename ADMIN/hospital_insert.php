<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $user_id = $_POST['hospital_id'];
    $h_name = $_POST['hospital_name'];
    $h_location = $_POST['location'];
    $h_contact = $_POST['contact'];
    $img_name = $_FILES['img']['name'];
    $img_tname = $_FILES['img']['tmp_name'];
    $img_size = $_FILES['img']['size'];
    $img_type = $_FILES['img']['type'];
    $hospital_details = $_POST['dtl'];
    $folder = 'mypictures/hospital/';
    $path = $folder . $img_name;
    move_uploaded_file($img_tname, $path);
    if ($img_type == 'image/png' || $img_type == 'image/jpg' || $img_type == 'image/jpeg' || $img_type == 'image/jfif') {
        if ($img_size <= 10000000) {
            $q = "INSERT INTO `hospital`(`USER_ID_FK`, `HOSPITAL_NAME`, `LOCATION`, `CONTACT`, `HOSPITAL_PIC`,`DETAILS`) VALUES ('$user_id','$h_name','$h_location','$h_contact','$path','$hospital_details')";
            $res = mysqli_query($con, $q);
            if ($res) {
                echo "<script>alert('Inserted');window.location.href='hospital_form.php'</script>";
            } else {
                echo mysqli_error($con);
            }
        } else {
            echo "<script>alert('Size Error');window.location.href='hospital_form.php'</script>";
        }
    } else {
        echo "<script>alert('Format Error');window.location.href='hospital_insert.php'</script>";
    }
}
