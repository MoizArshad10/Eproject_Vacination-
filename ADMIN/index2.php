<?php include('header.php');
include('connection.php');
$q = "select count(*) as admin from users where role_id_FK='1'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);


$q1 = "select count(*) as hospitals from users where role_id_FK='3'";
$res1 = mysqli_query($con, $q1);
$data1 = mysqli_fetch_assoc($res1);


$q2 = "select count(*) as parents from users where role_id_FK='2'";
$res2 = mysqli_query($con, $q2);
$data2 = mysqli_fetch_assoc($res2);
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 08:44:36 GMT -->

<head>





    <!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 08:45:12 GMT -->

</html>

<?php include('footer.php') ?>