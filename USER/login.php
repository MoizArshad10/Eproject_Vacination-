<?php include('header.php');
?>
<section class="st-shape-wrap st-gray-bg">
  <div class="st-shape4">
    <img src="assets/img/shape/section_shape.png" alt="shape1">
  </div>
  <div class="st-shape6">
    <img src="assets/img/shape/contact-shape3.svg" alt="shape3">
  </div>
  <div class="st-height-b120 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">Log In</h2>
      <div class="st-seperator">
        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
        <div class="st-seperator-center"><img src="assets/img/icons/favicon.png" alt="icon"></div>
        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
      </div>

      <div class="st-height-b40 st-height-lg-b40"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <form method="POST" action="" enctype="multipart/form-data">
            <div id="st-alert1"></div>
            <div class="row">
              <div class="col-lg-12">
                <div class="st-form-field st-style1">
                  <label>Username</label>
                  <input type="text" name="user_name" placeholder="Enter Username" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="st-form-field st-style1">
                  <label>Password</label>
                  <input type="password" name="user_password" placeholder="Enter Password" required>
                </div>
              </div>
              <div class="col-lg-12">
                <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" name="btn">Log In</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
<?php include('footer.php');
include("connection.php");
if (isset($_POST['btn'])) {
  $us = $_POST['user_name'];
  $p = $_POST['user_password'];
  $q = "select * from users where USERNAME='$us' and PASSWORD='$p' and role_id_FK='2'";
  $res = mysqli_query($con, $q);
  $data = mysqli_fetch_assoc($res);
  $count = mysqli_num_rows($res);
  if ($count == 0) {
    echo "<script>alert('Log In failed');window.location.href='index.php'</script>";
  } else {
    $_SESSION['USER_NAME'] = $us;
    $_SESSION['USER_IMAGE'] = $data['USER_IMAGE'];
    $_SESSION['USER_ID'] = $data['ID'];
    echo "<script>alert('Succesfully Logged in'); window.location.href='index.php'</script>";
  }
}
?>