<?php include('header.php');
include('connection.php');
$q = "select count(*) as vaccine_category from category";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);


$q1 = "select count(*) as hospitals from users where role_id_FK='3'";
$res1 = mysqli_query($con, $q1);
$data1 = mysqli_fetch_assoc($res1);


$q2 = "select count(*) as parents from users where role_id_FK='2'";
$res2 = mysqli_query($con, $q2);
$data2 = mysqli_fetch_assoc($res2);

$q3 = "select count(*) as vaccine from vaccine_detail";
$res3 = mysqli_query($con, $q3);
$data3 = mysqli_fetch_assoc($res3);
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 08:44:36 GMT -->

<head>

    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <div class="single_quick_activity d-flex bg-dark ">
                                            <div class="icon">
                                                <img src="img/icon/cap.svg" alt="">
                                            </div>
                                            <div class="count_content ">
                                                <h3><span class="counter text-light "><?php echo $data['vaccine_category'] ?></span> </h3>
                                                <p class="text-light">Vaccine Category</p>
                                            </div>
                                        </div>
                                        <div class="single_quick_activity d-flex bg-dark ">
                                            <div class="icon">
                                                <img src="img/icon/man.svg" alt="">
                                            </div>
                                            <div class="count_content ">
                                                <h3><span class="counter text-light"><?php echo $data2['parents'] ?></span> </h3>
                                                <p class="text-light">Parents</p>
                                            </div>
                                        </div>
                                        <div class="single_quick_activity d-flex bg-dark ">
                                            <div class="icon">
                                                <img src="img/icon/wheel.svg" alt="">
                                            </div>
                                            <div class="count_content ">
                                                <h3><span class="counter text-light"><?php echo $data1['hospitals'] ?></span> </h3>
                                                <p class="text-light">Hospitals</p>
                                            </div>
                                        </div>
                                        <div class="single_quick_activity d-flex bg-dark ">
                                            <div class="icon">
                                                <img src="img/icon/pharma.svg" alt="">
                                            </div>
                                            <div class="count_content ">
                                                <h3><span class="counter text-light"><?php echo $data3['vaccine'] ?></span> </h3>
                                                <p class="text-light">Vaccines</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 08:45:12 GMT -->

</html>

<?php include('footer.php') ?>