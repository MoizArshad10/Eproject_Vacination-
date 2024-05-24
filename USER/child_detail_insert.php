<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $parent_id = $_POST['parent_id'];
    $dob = $_POST['d_o_b'];
    $child_name = $_POST['c_name'];
    $blood_group = $_POST['b_group'];
    $gender = $_POST['gender'];
    $p_cnic_no = $_POST['p-cnic'];
    $b_form = $_POST['b_form'];
    $birth_certificate = $_POST['b_crt'];
    $child_img_name = $_FILES['c_image']['name'];
    $child_img_tname = $_FILES['c_image']['tmp_name'];
    $child_img_size = $_FILES['c_image']['size'];
    $child_img_type = $_FILES['c_image']['type'];
    $folder = 'mypictures/childs/';
    $path = $folder . $child_img_name;
    move_uploaded_file($child_img_tname, $path);

    if ($child_img_type == 'image/png' || $child_img_type == 'image/jpg' || $child_img_type == 'image/jpeg') {
        if ($child_img_size <= 10000000) {
            $q = "insert into child_details(`PARENTS_ID_FK`, `D_O_B`, `CHILD_NAME`, `BLOOD_GROUP`, `GENDER`, `B_FORM`, `B_CERTIFICATE`, `PARENTS_CNIC`, `CHILD_PICTURE`)
         VALUES ('$parent_id','$dob','$child_name','$blood_group','$gender','$b_form','$birth_certificate','$p_cnic_no','$path')";
            $res = mysqli_query($con, $q);
            if ($res) {
                echo "<script>alert('Inserted');window.location.href='child_detail_show.php';</script>";
            } else {
                echo mysqli_error($con);
            }
        } else {
            echo "<script>alert('size error');</script>";
        }
    } else {
        echo "<script>alert('format error');</script>";
    }
}
