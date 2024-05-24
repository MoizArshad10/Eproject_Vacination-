<?php include('header.php');
include('connection.php');


$q1 = "select * from users where ROLE_ID_FK='2'";
$res1 = mysqli_query($con, $q1);

// $q="select * from vaccine_detail join category on category.ID=vaccine_detail.VACCINE_ID_FK";
$q = "select * from vaccine_detail";
$res = mysqli_query($con, $q);


$q3 = "select * from hospital";
$res3 = mysqli_query($con, $q3);
if (isset($_SESSION['USER_ID'])) {
  $xy = $_SESSION['USER_ID'];
  $q4 = "select * from child_details where PARENTS_ID_FK='$xy'";
  $res4 = mysqli_query($con, $q4);
}

// "select * from products join category on category.cat_id=products.cat_id_FK order by products.price where category.cat_id='$x'"

?>

<section id="appointment" class="st-shape-wrap">
  <div class="st-shape2"><img src="assets/img/shape/contact-shape2.svg" alt="shape2"></div>
  <div class="st-height-b120 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">Make an appointment</h2>
      <div class="st-seperator">
        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
        <div class="st-seperator-center"><img src="assets/img/icons/favicon.png" alt="icon"></div>
        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
      </div>
      <div class="st-section-heading-subtitle">
        <?php if (!isset($_SESSION['USER_IMAGE'])) { ?>
          <div class="alert alert-warning" role="alert">To book an appointment you need to login first ! <button class="btn btn-warning"><a href="login.php">Login</a></button>
          </div><?php  } else { ?>
      </div>
      <div class="st-height-b40 st-height-lg-b40"></div>
    </div>
    <div class="container">
      <div class="col-lg-10 offset-lg-1">
        <form method="POST" action="appointment_insert.php" class="st-appointment-form">
          <div id="st-alert1"></div>
          <div class="row">
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>PARENT NAME</label>
                <input type="hidden" name="p_id" value="<?php echo $_SESSION['USER_ID'] ?>" required>
                <input value="<?php echo $_SESSION['USER_NAME'] ?>">

              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>CHILD NAME</label>
                <select name="cname" data-placeholder="Select Child">
                  <?php while ($data4 = mysqli_fetch_assoc($res4)) { ?>
                    <option value="<?php echo $data4['ID'] ?>"><?php echo $data4['CHILD_NAME'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>Hospital</label>
                <div class="st-custom-select-wrap">
                  <select name="h_id" class="st_select1" data-placeholder="Select Hospital">
                    <option></option> <?php while ($data3 = mysqli_fetch_assoc($res3)) { ?>
                      <option value="<?php echo $data3['ID'] ?>"><?php echo $data3['HOSPITAL_NAME'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>Vaccine</label>
                <div class="st-custom-select-wrap">
                  <select name="vacc_id" class="st_select1" data-placeholder="Select Vaccine">
                    <option></option><?php while ($data = mysqli_fetch_assoc($res)) { ?>
                      <option value="<?php echo $data['ID'] ?>"><?php echo $data['VACCINE_NAME'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>DATE</label>
                <input type="date" name="date" placeholder="" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>TIME</label>
                <input type="time" name="time" placeholder="" required>
              </div>
            </div>


            <div class="col-lg-12">
              <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="appointment-submit" name="btn">Appointment</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="st-height-b120 st-height-lg-b80"></div>
</section>
<?php } ?>
</div>




<?php include('footer.php') ?>