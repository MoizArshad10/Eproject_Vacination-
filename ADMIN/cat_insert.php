<?php
include('connection.php');
if (isset($_POST['sub'])) {
    $cat_name = $_POST['cat_name'];
    $details = $_POST['dtls'];
    $query = "insert into category(CAT_NAME,DETAILS) values('$cat_name','$details')";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Inserted Successfully');window.location.href='cat_form.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
