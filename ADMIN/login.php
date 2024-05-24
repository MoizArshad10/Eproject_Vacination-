<?php session_start();  ?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/hospital-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 08:45:26 GMT -->

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Hospital</title>
  <link rel="icon" href="img/favicon.png" type="image/png">

  <link rel="stylesheet" href="css/bootstrap1.min.css" />

  <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

  <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

  <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

  <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

  <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

  <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

  <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
  <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

  <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
  <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

  <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

  <link rel="stylesheet" href="vendors/morris/morris.css">

  <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

  <link rel="stylesheet" href="css/metisMenu.css">

  <link rel="stylesheet" href="css/style1.css" />
  <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
  <div class="vh-100 " style="background-image: url(img/loginbg2.png);background-size:cover" >
  <div class="main_content_iner vh-100  "  >
    <div class="container-fluid p-lg-5  ">
      <div class="row justify-content-center pt-5">
        <div class="col-lg-12">
        
            <div class="row justify-content-center pt-5 ">
              <div class="col-lg-4">

                <div class="modal-content cs_modal  mt-5 py-5 " style="background-color:rgba(0,0,0,0.2);
                backdrop-filter:blur(5px);" >
                  <div class="modal-header bg-transparent  ">
                    <h5 class="modal-title text-light">LOG IN</h5>
                  </div>
                  <div class="modal-body  bg-transparent  text-light ">
                    <form method="POST">
                      <div class="">
                        <input type="text" class="form-control " placeholder="Username" name="user_name" >
                      </div>
                      <div class="">
                        <input type="password" class="form-control" placeholder="Password" name="user_password">
                      </div>
                      <button type="submit" class="btn_1 full_width text-center" name="btn">Log in</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  </div>
  
  <script src="js/jquery1-3.4.1.min.js"></script>

  <script src="js/popper1.min.js"></script>

  <script src="js/bootstrap1.min.js"></script>

  <script src="js/metisMenu.js"></script>

  <script src="vendors/count_up/jquery.waypoints.min.js"></script>

  <script src="vendors/chartlist/Chart.min.js"></script>

  <script src="vendors/count_up/jquery.counterup.min.js"></script>

  <script src="vendors/swiper_slider/js/swiper.min.js"></script>

  <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

  <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

  <script src="vendors/gijgo/gijgo.min.js"></script>

  <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
  <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
  <script src="vendors/datatable/js/buttons.flash.min.js"></script>
  <script src="vendors/datatable/js/jszip.min.js"></script>
  <script src="vendors/datatable/js/pdfmake.min.js"></script>
  <script src="vendors/datatable/js/vfs_fonts.js"></script>
  <script src="vendors/datatable/js/buttons.html5.min.js"></script>
  <script src="vendors/datatable/js/buttons.print.min.js"></script>
  <script src="js/chart.min.js"></script>

  <script src="vendors/progressbar/jquery.barfiller.js"></script>

  <script src="vendors/tagsinput/tagsinput.js"></script>

  <script src="vendors/text_editor/summernote-bs4.js"></script>
  <script src="vendors/apex_chart/apexcharts.js"></script>

  <script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/hospital-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 08:45:26 GMT -->

</html>

<?php
if (isset($_POST['btn'])) {
  $username = $_POST['user_name'];
  $password = $_POST['user_password'];
  include('connection.php');
  $q = "select * from users where USERNAME='$username' && PASSWORD='$password'";
  $res = mysqli_query($con, $q);
  $data = mysqli_fetch_assoc($res);
  $row = mysqli_num_rows($res);
  if ($row == 0) {
    echo "<script>alert('Login failed');</script>";
  } else {
    $_SESSION['USER_NAME'] = $username;
    if ($data['ROLE_ID_FK'] == 1) {
      $_SESSION['ADMIN_NAME'] = $username;
      $_SESSION['ADMIN_IMAGE'] = $data['USER_IMAGE'];
      echo "<script>alert('Login Successful');window.location.href='index.php'</script>";
    }
    if ($data['ROLE_ID_FK'] == 3) {
      //FOR HOSPITAL
      $_SESSION['HOSP_NAME'] = $username;
      $_SESSION['HOSP_IMAGE'] = $data['USER_IMAGE'];
      $_SESSION['HOSP_ID'] = $data['ID'];

      echo "<script>alert('Login Successful');window.location.href='index2.php'</script>";
    }
  }
}



?>