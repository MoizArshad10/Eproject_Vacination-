<?php session_start();
include('connection.php');
$q = "select * from hospital";
$res = mysqli_query($con, $q);

$q1 = "select * from category";
$res1 = mysqli_query($con, $q1);

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <!-- Page Title -->
  <title>VMS - Vaccination Management System</title>
  <!-- Favicon Icon -->
  <link rel="shortcut icon" href="assets/img/icons/favicon.png" type="image/x-icon">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/lightgallery.min.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/jQueryUi.min.css" />
  <link rel="stylesheet" href="assets/css/textRotate.css" />
  <link rel="stylesheet" href="assets/css/select2.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    ::-webkit-scrollbar {
      width: 7px;
    }

    ::-webkit-scrollbar-thumb {
      background: #000;
      height: 10%;
      width: 6px;
      border-radius: 50px;
    }

    .hero-first {
      display: block;
      height: 100vh;
      width: 100%;
    }

    .hero-second {
      display: none;
    }

    .hero-first .elem {
      height: 11vw;
      position: relative;
      overflow: hidden;
      margin-bottom: -4vh;
    }

    .hero-first .elem h1 {
      position: absolute;
      top: 100%;
      left: 0;
      font-family: kajiro;
      color: #3d5a80;
      font-size: 11vw;
      font-weight: 100;
    }

    .hero-first .elem h1:nth-child(1) {
      top: 0;
    }

    #top {
      pointer-events: none;
      height: 100vh;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      margin: 0 auto;
      padding: 30vh 0 0 5vw;
    }

    #back {
      height: 100vh;
      width: 100%;
      overflow: hidden;
    }

    .img-container {

      height: 100vh;
      position: relative;
      overflow: hidden;
    }

    .img-container img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      position: absolute;
      top: 100%;
      left: 0;
    }

    .img-container img:nth-child(1) {
      top: 0;
    }

    @media (max-width:1200px) {
      .hero-first {
        display: none;
      }

      .hero-second {
        display: block;
      }

      .invi {
        display: none;
      }
    }
  </style>
</head>

<body>
  <div class="st-perloader">
    <div class="st-perloader-in">
      <div class="st-wave-first">
        <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg">
          <g>
            <path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" />
          </g>
        </svg>
      </div>
      <div class="st-wave-second">
        <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg">
          <g>
            <path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" />
          </g>
        </svg>
      </div>
    </div>
  </div>
  <!-- Start Header Section -->
  <header class="st-site-header st-style1 st-sticky-header">
    <div class="st-main-header">
      <div class="container">
        <div class="st-main-header-in">
          <div class="st-main-header-left">
            <a class="st-site-branding" href="index.php"><img src="assets/img/logo.png" height="150px" width="150px" alt="VMS"></a>
          </div>
          <div class="st-main-header-right">
            <div class="st-nav">
              <ul class="st-nav-list ">
                <li><a href="index.php" id="anim">Home</a></li>
                <li><a href="about.php" id="anim">About</a></li>

                <li class="menu-item-has-children"><a href="#" class="st-smooth-move" id="anim">Hospitals</a>
                  <ul>
                    <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                      <li><a href="hosp.php?id=<?php echo $data['ID'] ?>"><?php echo $data['HOSPITAL_NAME'] ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
                <li class="menu-item-has-children"><a href="#" class="st-smooth-move" id="anim">Vaccine</a>
                  <ul>
                    <?php while ($data1 = mysqli_fetch_assoc($res1)) { ?>
                      <li><a href="vaccine.php?id=<?php echo $data1['ID'] ?>"><?php echo $data1['CAT_NAME'] ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
                <li><a href="appointment_form.php" id="anim">Appointment</a></li>


                <?php if (!isset($_SESSION['USER_IMAGE'])) { ?>
                  <li><a href="signup.php">Sign UP</a></li>
                  <li><a href="login.php">Login</a></li>
                <?php  } else { ?>
                  <li class="menu-item-has-children"><img src="./<?php echo  $_SESSION['USER_IMAGE'] ?>" height=15px; width=30px; style="object-fit:cover;" ></a>

                    <ul>
                      <li><a href="profile.php?id=<?php echo $_SESSION['USER_NAME'] ?>"><?php echo  $_SESSION['USER_NAME'] ?></a></li>
                      <li><a href="child_detail_form.php?id=<?php echo $_SESSION['USER_ID'] ?>">Add Child Details</a></li>
                      <li><a href="child_detail_show.php?id=<?php echo $_SESSION['USER_ID'] ?>"">Show Child Details</a></li>
                      <li><a href="user_appointments.php?id=<?php echo $_SESSION['USER_NAME'] ?>">Your Appointments</a></li>
                      <li><a href="logout.php">LOG OUT</a></li>
                    </ul>
                  </li>

                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Section -->