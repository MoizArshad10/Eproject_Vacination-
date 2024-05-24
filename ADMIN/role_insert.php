<?php
include('connection.php');
if (isset($_POST['sub'])) {
    $role_name = $_POST['role_name'];
    $query = "insert into role(ROLE_NAME) values('$role_name')";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Inserted Successfully');window.location.href='role_form.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
