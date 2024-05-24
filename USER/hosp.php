<?php include('header.php');
include('connection.php');
if (isset($_GET['id'])) {
  $x = $_GET['id'];
  $q = "select * from hospital where ID='$x'";
} else {
  $q = "select * from hospital";
}
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);

?>
<!-- Start Hospital Single Seciton -->
<section class="st-content">
  <div class="st-page-heading st-dynamic-bg" data-src="../ADMIN/<?php echo $data['HOSPITAL_PIC'] ?>">
    <div class="container">
      <div class="st-page-heading-in text-center">
        <h1 class="st-page-heading-title"><?php echo $data['HOSPITAL_NAME'] ?></h1>
        <div class="st-post-label">
          <span><?php echo $data['LOCATION'] ?></span>
          <span><?php echo $data['CONTACT'] ?></span>
        </div>
      </div>
    </div>
  </div><!-- .st-page-heading -->
  <div class="st-height-b100 st-height-lg-b80"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="st-post-details st-style1">
          <h3 style="font-family: Arial, Helvetica, sans-serif;"><?php echo $data['HOSPITAL_NAME'] ?></h3>
          <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif;"><?php echo $data['DETAILS'] ?></p>
        </div>
      </div>
    </div>

    <div class="st-hero-btn">
      <button class="st-btn st-style1 st-color1"><a href="appointment_form.php">Book Your Appointment</a></button>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</section>
<!-- End Hospital Single Seciton -->
<?php include('footer.php') ?>