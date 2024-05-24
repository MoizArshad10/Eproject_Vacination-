<!-- testing -->
<?php
include('connection.php');
if (isset($_POST['btn'])) {
    $id = $_POST['hidden_id'];
    $user_img_name = $_FILES['u_image']['name'];
    $user_img_tname = $_FILES['u_image']['tmp_name'];
    $user_img_size = $_FILES['u_image']['size'];
    $user_img_type = $_FILES['u_image']['type'];
    $folder = 'mypictures/users/';
    $path = $folder . $user_img_name;
    move_uploaded_file($user_img_tname, $path);

    if ($user_img_type == 'image/png' || $user_img_type == 'image/jpg' || $user_img_type == 'image/jpeg') {
        if ($user_img_size <= 10000000) {
            $q = "update users set USER_IMAGE='$path' where ID='$id'";
            $res = mysqli_query($con, $q);
            if ($res) {
                echo "<script>alert('Image Updated Successfully');window.location.href='index.php'</script>";
            } else {
                echo mysqli_error($con);
            }
        } else {
            echo "<script>alert('Size Error');</script>";
        }
    } else {
        echo "<script>alert('Format Error');
    history.back();</script>";
    }
}
?>