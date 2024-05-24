<?php include('header.php') ?>
<section id="appointment" class="st-shape-wrap st-gray-bg">
  <div class="st-shape4">
    <img src="assets/img/shape/section_shape.png" alt="shape1">
  </div>
  <div class="st-shape6">
    <img src="assets/img/shape/contact-shape3.svg" alt="shape3">
  </div>
  <div class="st-height-b120 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">Sign Up </h2>
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
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Username</label>
                  <input type="text" name="name" placeholder="Enter Username" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Password</label>
                  <input type="password" name="pswd" placeholder="Enter Password" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Contact </label>
                  <input type="text" name="con" placeholder="Enter Contact No" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Image </label>
                  <input type="file" name="imng" placeholder="Insert Image" required>
                </div>
              </div>

              <div class="col-lg-12">
                <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" name="btn">Sign Up</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>



<?php include('footer.php');
include('connection.php');
if (isset($_POST['btn'])) {
  $user_name = $_POST['name'];
  $user_password = $_POST['pswd'];
  $user_contact = $_POST['con'];
  $user_img_name = $_FILES['imng']['name'];
  $user_img_tname = $_FILES['imng']['tmp_name'];
  $user_img_size = $_FILES['imng']['size'];
  $user_img_type = $_FILES['imng']['type'];
  $folder = 'mypictures/users/';
  $path = $folder . $user_img_name;
  move_uploaded_file($user_img_tname, $path);
  $folder1 = '../ADMIN/mypictures/users/';
  $path1 = $folder1 . $user_img_name;
  move_uploaded_file($user_img_tname, $path1);

  if ($user_img_type == 'image/png' || $user_img_type == 'image/jpg' || $user_img_type == 'image/jpeg') {
    if ($user_img_size <= 10000000) {
      $q = "INSERT INTO `users`(`ROLE_ID_FK`, `USERNAME`, `PASSWORD`, `CONTACT`, `USER_IMAGE`)  VALUES (2,'$user_name','$user_password','$user_contact','$path')";
      $res = mysqli_query($con, $q);
      if ($res) {
        echo "<script>alert('Inserted');window.location.href='index.php'</script>";
      } else {
        echo mysqli_error($con);
      }
    } else {
      echo "<script>alert('size error');window.location.href='index.php'</script>";
    }
  } else {
    echo "<script>alert('format error');window.location.href='index.php'</script>";
  }
}
?>