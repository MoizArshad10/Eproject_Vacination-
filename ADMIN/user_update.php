<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $id = $_POST['u_id'];
    $role_id = $_POST['u_r_id'];
    $user_name = $_POST['u_name'];
    $password = $_POST['pwsd'];
    $contact = $_POST['cnt'];
    $user_img_name = $_FILES['u_image']['name'];
    $user_img_tname = $_FILES['u_image']['tmp_name'];
    $user_img_size = $_FILES['u_image']['size'];
    $user_img_type = $_FILES['u_image']['type'];
    if (is_uploaded_file($_FILES['u_image']['tmp_name'])) {
        $folder = 'mypictures/users/';
        $path = $folder . $user_img_name;
        if ($user_img_type == "image/png" || $user_img_type == "image/jpg"  ||  $user_img_type == "image/jpeg") {
            if ($user_img_size < 1000000000) {
                $q = "update users set ROLE_ID_FK='$role_id', USERNAME='$user_name',
    PASSWORD='$password', CONTACT='$contact', USER_IMAGE='$path' where ID='$id'";
                move_uploaded_file($user_img_tname, $path);
                $res = mysqli_query($con, $q);
                if ($res) {
                    echo "<script>alert('Updated Successfully');window.location.href='user_show.php'</script>";
                } else {
                    echo mysqli_error($con);
                }
            } else {
                echo "<script>alert('Please Choose Small Size Image ');window.location.href='user_show.php'</script>";
            }
        } else {
            echo "<script>alert('Please Choose Correct Format Image Example: PNG,JPG,JPEG');window.location.href='user_show.php'</script>";
        }
    } else {
        $q = "update users set ROLE_ID_FK='$role_id', USERNAME='$user_name',
    PASSWORD='$password', CONTACT='$contact' where ID='$id'";
        $res = mysqli_query($con, $q);
        if ($res) {
            echo "<script>alert('User Details Updated');window.location.href='user_show.php'</script>";
        } else {
            echo mysqli_error($con);
        }
    }
}
