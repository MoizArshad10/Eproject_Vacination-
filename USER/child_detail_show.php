<?php
include('header.php');
include('connection.php');
$user_id = $_GET['id'];
$query = "select * from child_details where PARENTS_ID_FK = '$user_id' ";
$res = mysqli_query($con, $query); ?>
<div class="st-content">
  <!-- Start Doctors Profile -->
  <section class="st-shape-wrap">
    <div class="st-shape6">
      <img src="assets/img/shape/contact-shape3.svg" alt="shape3">
    </div>
    <div class="st-height-b120 st-height-lg-b80"></div>
    <?php while ($data = mysqli_fetch_assoc($res)) { ?>
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-3">
            <div class="st-doctors-info-left">
              <div class="st-member st-style1 st-zoom">
                <div class="st-member-img">
                  <img src="<?php echo $data['CHILD_PICTURE'] ?>" alt="" class="st-zoom-in">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-9">
            <div class="st-height-b25 st-height-lg-b25"></div>
            <div class="st-doctors-info-right">
              <div class="st-height-b20 st-height-lg-b20"></div>
              <ul class="st-doctors-special st-mp0">
                <li><b>Child Name :</b><span><?php echo $data['CHILD_NAME'] ?></span></li>
              </ul>
              <ul class="st-doctors-special st-mp0">
                <li><b>Date of Birth :</b><span><?php echo $data['D_O_B'] ?></span></li>
              </ul>
              <ul class="st-doctors-special st-mp0">
                <li><b>Gender :</b><span><?php echo $data['GENDER'] ?></span></li>
              </ul>
              <ul class="st-doctors-special st-mp0">
                <li><b>Blood Group :</b><span><?php echo $data['BLOOD_GROUP'] ?></span></li>
              </ul>
              <ul class="st-doctors-special st-mp0">
                <li><b>B-Form No :</b><span><?php echo $data['B_FORM'] ?></span></li>
              </ul>
              <ul class="st-doctors-special st-mp0">
                <li><b>Birth Certificate :</b><span><?php echo $data['B_CERTIFICATE'] ?></span></li>
              </ul>
              <ul class="st-doctors-special st-mp0">
                <li><b>Parent Nic :</b><span><?php echo $data['PARENTS_CNIC'] ?></span></li>
              </ul>
              <a href="childdelete.php?id=<?php echo $data['ID'] ?>" class="btn btn-primary">Delete</a>
              <div class="st-height-b30 st-height-lg-b30"></div>
              <!-- .st-tabs -->
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <div class="st-height-b120 st-height-lg-b80"></div>
  </section>
</div>
<?php include('footer.php') ?>