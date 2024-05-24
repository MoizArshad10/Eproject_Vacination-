<?php
include('connection.php');

if (isset($_POST['btn'])) {
    $id = $_POST['HOSPITAL_ID'];
    $hospital_name = $_POST['HOSPITAL_NAME'];
    $hospital_location = $_POST['LOCATION'];
    $hospital_contact = $_POST['CONTACT'];
    $hospital_details = $_POST['DETAILS'];
    $hospital_img_name = $_FILES['h_image']['name'];
    $hospital_img_tname = $_FILES['h_image']['tmp_name'];
    $hospital_img_size = $_FILES['h_image']['size'];
    $hospital_img_type = $_FILES['h_image']['type'];

    if (is_uploaded_file($_FILES['h_image']['tmp_name'])) {
        $folder = 'mypictures/users/';
        $path = $folder . $hospital_img_name;

        if (in_array($hospital_img_type, ['image/png', 'image/jpeg', 'image/jpg'])) {
            if ($hospital_img_size < 1000000000) {
                $q = "UPDATE hospital SET HOSPITAL_NAME='$hospital_name', LOCATION='$hospital_location', CONTACT='$hospital_contact', DETAILS='$hospital_details', HOSPITAL_PIC = '$path' WHERE ID='$id'";

                if (move_uploaded_file($hospital_img_tname, $path)) {
                    $res = mysqli_query($con, $q);

                    if ($res) {
                        echo "<script>alert('Updated Successfully');
                        window.location.href='hospital_show.php'</script>";
                    } else {
                        echo "<script>alert('Failed to update: " . mysqli_error($con) . "');
                        window.location.href='hospital_show.php'</script>";
                    }
                } else {
                    echo "<script>alert('Failed to upload image');
                    window.location.href='hospital_show.php'</script>";
                }
            } else {
                echo "<script>alert('Please Choose a Smaller Image');
                window.location.href='hospital_show.php'</script>";
            }
        } else {
            echo "<script>alert('Please Choose Correct Format Image (PNG, JPG, JPEG)');
            window.location.href='hospital_show.php'</script>";
        }
    } else {
        $q = "UPDATE hospital SET HOSPITAL_NAME='$hospital_name', LOCATION='$hospital_location', CONTACT='$hospital_contact', DETAILS='$hospital_details' WHERE ID='$id'";
        $res = mysqli_query($con, $q);

        if ($res) {
            echo "<script>alert('User Details Updated');
            window.location.href='hospital_show.php'</script>";
        } else {
            echo "<script>alert('Failed to update: " . mysqli_error($con) . "');
            window.location.href='hospital_show.php'</script>";
        }
    }
}
