<?php include('header.php');
include('connection.php');
$i = $_GET['id'];
$query = "select * from users where USERNAME='$i'";
$res = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($res); ?>
<div class="st-content">
  <!-- Start Doctors Profile -->
  <section class="st-shape-wrap">
    <div class="st-shape6">
      <img src="assets/img/shape/contact-shape3.svg" alt="shape3">
    </div>
    <div class="st-height-b120 st-height-lg-b80"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-3">
          <div class="st-doctors-info-left">
            <div class="st-member st-style1 st-zoom">
              <div class="st-member-img">
                <img src="<?php echo $data['USER_IMAGE'] ?>" alt="" class="st-zoom-in">
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-lg-9">
          <div class="st-height-b25 st-height-lg-b25"></div>
          <div class="st-doctors-info-right">
            <div class="st-height-b20 st-height-lg-b20"></div>
            <ul class="st-doctors-special st-mp0">
              <li><b>Username :</b><span><?php echo $_SESSION['USER_NAME'] ?></span></li>
            </ul>

            <ul class="st-doctors-special st-mp0">
              <li><b>Password : </b><span><?php echo $data['PASSWORD'] ?></span></li>
            </ul>

            <ul class="st-doctors-special st-mp0">
              <li><b>Contact No : </b><span><?php echo $data['CONTACT'] ?></span></li>
            </ul>
            <ul class="st-doctors-special st-mp0">
              <li><b>Wanna change Pass ?? </b><a href="profile_pass_changeform.php?id=<?php echo $data['ID'] ?>">Change From Here</a></li>


            </ul>
            <ul class="st-doctors-special st-mp0">
              <li><b>Wanna change Picture ?? </b><a href="profile_pic_changeform.php?id=<?php echo $data['ID'] ?>">Change From Here</a></li>


            </ul>
            <div class="st-height-b30 st-height-lg-b30"></div>
            <!-- .st-tabs -->
          </div>
        </div>
      </div>
    </div>
    <div class="st-height-b120 st-height-lg-b80"></div>
  </section>
</div>
<?php include('footer.php') ?>