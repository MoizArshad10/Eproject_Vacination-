<?php include('header.php');
include('connection.php');
if (isset($_GET['id'])) {
  $x = $_GET['id'];
  $q = "select * from category  where ID='$x'";
} else {
  $q = "select * from category";
}
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);

?>

<!-- Start Vaccine Single Seciton -->
<section class="st-content">
  <div class="st-page-heading st-dynamic-bg" data-src="assets/img/shape/vaccine.png">
    <div class="container">
      <div class="st-page-heading-in text-center">
        <h1 class="st-page-heading-title">Vaccines</h1>
      </div>
    </div>
  </div><!-- .st-page-heading -->
  <div class="st-height-b100 st-height-lg-b80"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="st-post-details st-style1">
          <h3><?php echo $data['CAT_NAME'] ?></h3>
          <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif;"><?php echo $data['DETAILS'] ?></p>
        </div>
      </div>
    </div>
    <div class="st-hero-btn">
      <button class="st-btn st-style1 st-color1"><a href="appointment_form.php">Book Your Appointment</a></button>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</section>
<!-- End Vaccine Single Seciton -->

<?php include('footer.php') ?>