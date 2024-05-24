<?php include('header.php');
include('connection.php');
$q = "select * from hospital";
$res = mysqli_query($con, $q);

$q1 = "select * from category";
$res1 = mysqli_query($con, $q1);
?>
<!-- Start About Seciton -->
<section class="st-about-wrap" id="about">
  <div class="st-shape-bg">
    <img src="assets/img/shape/about-bg-shape.svg" alt="shape">
  </div>
  <div class="st-height-b120 st-height-lg-b50"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">Who We Are</h2>
      <div class="st-seperator">
        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
        <div class="st-seperator-center"><img src="assets/img/icons/favicon.png" alt="icon"></div>
        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
      </div>
      <div class="st-section-heading-subtitle">We Are VMS-Vaccination Booking System<br>
        We Provide vaccines of various kind of disease which are available at city's Top Rated Hospitals
      </div>
    </div>
    <div class="st-height-b40 st-height-lg-b40"></div>
  </div>

  <!-- Start Hospitals Section -->
  <section id="hospitals">
    <div class="st-height-b120 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h2 class="st-section-heading-title">OUR HOSPITALS</h2>
        <div class="st-seperator">
          <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          <div class="st-seperator-center"><img src="assets/img/icons/favicon.png" alt="icon"></div>
          <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
        </div>
        <div class="st-section-heading-subtitle">Top hospitals of the City are attached with us for vaccination appointments<br>
          Hover on hospitals for appointment</div>
      </div>
      <div class="st-height-b40 st-height-lg-b40"></div>
    </div>
    <div class="container">

      <div class="st-slider st-style2">
        <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
          <div class="slick-wrapper">
            <?php while ($data = mysqli_fetch_assoc($res)) { ?>
              <div class="slick-slide-in">
                <div class="st-member st-style1 st-zoom">
                  <div class="st-member-img">
                    <img src="../ADMIN/<?php echo $data['HOSPITAL_PIC'] ?>" alt="" style="height: 200px;width:300px:object-fit:cover;" class="st-zoom-in">
                    <a class="st-doctor-link" href="appointment_form.php?id=<?php echo $data['ID'] ?>"><i class="fas fa-link"></i></a>
                    <div class="st-member-social-wrap">
                      <img src="assets/img/shape/member-shape.svg" alt="shape" class="st-member-social-bg">
                    </div>
                  </div>

                  <div class="st-member-meta">
                    <div class="st-member-meta-in">
                      <h3 class="st-member-name"><a href="hosp.php?id=<?php echo $data['ID'] ?>"><?php echo $data['HOSPITAL_NAME'] ?></a></h3>
                    </div>
                  </div>
                </div>


              </div>
            <?php } ?>
          </div>
        </div><!-- .slick-container -->
        <div class="pagination st-style1 st-flex st-hidden"></div>
        <!-- If dont need Pagination then add class .st-hidden -->
        <div class="swipe-arrow st-style1">
          <!-- If dont need navigation then add class .st-hidden -->
          <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
          <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
        </div>
      </div>
      <!-- .st-slider -->
    </div><!-- .container -->
  </section>
  <!-- End Hospitals Section -->

  <!-- Start Vaccines Section -->
  <section id="vaccine">
    <div class="st-height-b120 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h2 class="st-section-heading-title">Vaccines</h2>
        <div class="st-seperator">
          <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          <div class="st-seperator-center"><img src="assets/img/icons/favicon.png" alt="icon"></div>
          <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
        </div>
        <div class="st-section-heading-subtitle">We have almost all disease vaccines available.</div>
      </div>
      <div class="st-height-b40 st-height-lg-b40"></div>
    </div>
    <div class="container">

      <div class="st-slider st-style2">
        <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
          <div class="slick-wrapper">
            <?php while ($data1 = mysqli_fetch_assoc($res1)) { ?>
              <div class="slick-slide-in">
                <div class="st-member st-style1 st-zoom">
                  <div class="st-member-img">
                    <a class="st-doctor-link" href="appointment_form.php?id=<?php echo $data1['ID'] ?>"><i class="fas fa-link"></i></a>
                    <div class="st-member-social-wrap">
                      <img src="assets/img/shape/member-shape.svg" alt="shape" class="st-member-social-bg">
                    </div>
                  </div>

                  <div class="st-member-meta">
                    <div class="st-member-meta-in">
                      <h3 class="st-member-name"><a href="vaccine.php?id=<?php echo $data1['ID'] ?>"><?php echo $data1['CAT_NAME'] ?></a></h3>
                    </div>
                  </div>
                </div>


              </div>
            <?php } ?>
          </div>
        </div><!-- .slick-container -->
        <div class="pagination st-style1 st-flex st-hidden"></div>
        <!-- If dont need Pagination then add class .st-hidden -->
        <div class="swipe-arrow st-style1">
          <!-- If dont need navigation then add class .st-hidden -->
          <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
          <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
        </div>
      </div>
      <!-- .st-slider -->
    </div><!-- .container -->
    <div class="st-height-b120 st-height-lg-b80"></div>
  </section>
  <!-- End Vaccines Section -->


</section>
<!-- End About Seciton -->
<?php include('footer.php') ?>