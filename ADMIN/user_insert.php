<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $role_id = $_POST['u_r_id'];
    $user_name = $_POST['u_name'];
    $contact = $_POST['cnt'];
    $user_password = $_POST['pwsd'];
    $user_img_name = $_FILES['u_image']['name'];
    $user_img_tname = $_FILES['u_image']['tmp_name'];
    $user_img_size = $_FILES['u_image']['size'];
    $user_img_type = $_FILES['u_image']['type'];
    $folder = 'mypictures/users/';
    $path = $folder . $user_img_name;
    move_uploaded_file($user_img_tname, $path);

    if ($user_img_type == 'image/png' || $user_img_type == 'image/jpg' || $user_img_type == 'image/jpeg') {
        if ($user_img_size <= 10000000) {
            $q = "insert into users( `ROLE_ID_FK`, `USERNAME`, `PASSWORD`, `CONTACT`,`USER_IMAGE`) VALUES ('$role_id','$user_name','$user_password','$contact','$path')";
            $res = mysqli_query($con, $q);
            if ($res) {
                echo "<script>alert('Inserted');window.location.href='user_form.php'</script>";
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
