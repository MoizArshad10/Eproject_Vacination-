<?php
session_start();
if (!(isset($_SESSION['HOSP_NAME']) || isset($_SESSION['ADMIN_NAME']))) {
  header('location:login.php');
}


?>

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>VMS - Vaccination Management System</title>
  <link href="img/logo.png" type="image/png">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <style>
    /* Basic table styling */
.responsive-table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
}

.responsive-table th, .responsive-table td {
 
  padding: 8px;
  text-align: left;
}

.responsive-table th {
  background-color: #f2f2f2;
}

/* Responsive styling */
@media screen and (max-width: 1100px) {
  .responsive-table, .responsive-table thead, .responsive-table tbody, .responsive-table th, .responsive-table td, .responsive-table tr {
    display: block;
  }
  
  .responsive-table thead tr {
    display: none;
  }
  
  .responsive-table td {
    display: block;
    text-align: right;
    border: none;
    position: relative;
    padding-left: 50%;
  }
  
  .responsive-table td::before {
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 15px;
    font-weight: bold;
    text-align: left;
  }
  
  .responsive-table tr {
    margin-bottom: 10px;
    
  }
}

  </style>
</head>
<?php

function PageName()
{
  return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

$current_page = PageName();

?>

<body class="">
  <?PHP if (isset($_SESSION['ADMIN_NAME'])) { ?>
    <nav class="sidebar bg-dark shadow-none">
      <div class="logo d-flex justify-content-between bg-dark">
        <a href="index.php"><img src="img/logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
          <i class="ti-close text-white"></i>
        </div>
      </div>
      <ul id="sidebar_menu">
        <li class="mm-active">
          <a class="<?php echo $current_page == 'index.php' ? 'active' : NULL ?>" href="index.php" aria-expanded="false">
            <img src="img/menu-icon/1.svg" alt="">
            <span>Dashboard</span>
          </a>
        </li>
        <li class="">
          <a class="has-arrow" href="#" aria-expanded="false">
            <img src="img/menu-icon/3.svg" alt="">
            <span>Roles</span>
          </a>
          <ul>
            <li><a href="role_form.php">Add Role</a></li>
            <li><a href="role_show.php">Show Roles</a></li>
          </ul>
        </li>
        <li class="">
          <a class="has-arrow" href="#" aria-expanded="false">
            <img src="img/menu-icon/6.svg" alt="">
            <span>Users</span>
          </a>
          <ul>
            <li><a href="user_form.php">Add User</a></li>
            <li><a href="user_show.php">Show User</a></li>
          </ul>
        </li>
        <li class="">
          <a class="has-arrow" href="#" aria-expanded="false">
            <img src="img/menu-icon/3.svg" alt="">
            <span>Category</span>
          </a>
          <ul>
            <li><a href="cat_form.php">Add Category</a></li>
            <li><a href="cat_show.php">Show Category</a></li>
          </ul>
        </li>
        <li class="">
          <a class="has-arrow" href="#" aria-expanded="false">
            <img src="img/menu-icon/2.svg" alt="">
            <span>Vaccine Details</span>
          </a>
          <ul>
            <li><a href="vacc_form.php">Add Vaccine</a></li>
            <li><a href="vacc_show.php">Show Vaccine</a></li>
          </ul>
        </li>
        <li class="">
          <a class="has-arrow" href="#" aria-expanded="false">
            <img src="img/menu-icon/7.svg" alt="">
            <span>Hospitals</span>
          </a>
          <ul>
            <li><a href="hospital_form.php">Add Hospital</a></li>
            <li><a href="hospital_show.php">Show Hospital</a></li>
          </ul>
        </li>
        <li class="">
          <a class="has-arrow" href="appointment_show.php" aria-expanded="false">
            <img src="img/menu-icon/7.svg" alt="">
            <span>Appointnment</span>
          </a>
        </li>
      </ul>
    </nav>

    <!-- INDEX 2(HOSPITAL DASHBOARD) -->


  <?php } elseif (isset($_SESSION['HOSP_NAME'])) { ?>
    <nav class="sidebar bg-dark  shadow-none ">
      <div class="logo d-flex bg-dark justify-content-between">
        <a href="index.php"><img src="img/logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
          <i class="ti-close"></i>
        </div>
      </div>
      <ul id="sidebar_menu">
        <li class="mm-active">
          <a class="<?php echo $current_page == 'index2.php' ? 'active' : NULL ?>" href="index2.php" aria-expanded="false">
            <img src="img/menu-icon/1.svg" alt="">
            <span>Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="#" aria-expanded="false">
            <img src="img/menu-icon/3.svg" alt="">
            <span>Vaccine Availability</span>
          </a>
          <ul>
            <li><a href="vacc_availability_form.php">Vaccine Availibitlty Form</a></li>
            <li><a href="vacc_availability_show.php">Vaccine Availibitlty Show</a></li>
          </ul>
        </li>
        <li class="">
          <a href="appointment_show.php" aria-expanded="false">
            <img src="img/menu-icon/7.svg" alt="">
            <span>Appointnment</span>
          </a>
        </li>
      </ul>
    </nav>
  <?PHP } ?>


  <section class="main_content bg-secondary dashboard_part">

    <div class="container-fluid g-0">
      <div class="row ">
        <div class="col-lg-12 p-0 ">
          <div class="header_iner bg-dark d-flex justify-content-between align-items-center border-bottom border-white">
            <div class="sidebar_icon d-lg-none">
              <i class="ti-menu text-light"></i>
            </div>
            <div class="serach_field-area">
              <div class="search_inner">
                <form action="#">
                  <div class="search_field">
                  </div>
                </form>
              </div>
            </div>
            <!-- LJKL -->
            <div class="header_right d-flex bg-dark justify-content-between align-items-center">
              <div class="profile_info">
                <?PHP if (isset($_SESSION['ADMIN_NAME'])) { ?>
                  <img src="<?php echo $_SESSION['ADMIN_IMAGE']  ?>" alt="#">
                  <div class="profile_info_iner">
                    <h5><?php echo $_SESSION['ADMIN_NAME']  ?></h5>
                  <?PHP } else if (isset($_SESSION['HOSP_NAME'])) { ?>
                    <img src="<?php echo $_SESSION['HOSP_IMAGE']  ?>" alt="#">
                    <div class="profile_info_iner">
                      <h5><?php echo $_SESSION['HOSP_NAME']  ?></h5>
                    <?php } ?>
                    <?php
                    if (isset($_SESSION['ADMIN_NAME'])) {
                    ?>
                      <div class="profile_info_details">
                        <li><a href="backprofile.php?id=<?php echo $_SESSION['ADMIN_NAME'] ?> "> <?php echo  $_SESSION['ADMIN_NAME'] ?></a></li>
                        <a href="logout.php">Log Out <i class="ti-shift-left"></i></a>
                      </div>
                    <?php
                    } else if (isset($_SESSION['HOSP_NAME'])) {
                    ?>
                      <div class="profile_info_details">
                        <li><a href="backprofile.php?id=<?php echo $_SESSION['HOSP_NAME'] ?> "> <?php echo  $_SESSION['HOSP_NAME'] ?></a></li>
                        <a href="logout.php">Log Out <i class="ti-shift-left"></i></a>
                      </div>
                    <?php
                    }
                    ?>
                    </div>

                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>