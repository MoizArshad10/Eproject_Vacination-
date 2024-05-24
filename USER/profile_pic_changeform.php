<?php include('header.php');
include('connection.php');
$i = $_GET['id'];
$q = "select * from users where id='$i'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res)
?>

<section class="st-shape-wrap" id="contact">
  <div class="st-shape1"><img src="assets/img/shape/contact-shape1.svg" alt="shape1"></div>
  <div class="st-shape2"><img src="assets/img/shape/contact-shape2.svg" alt="shape2"></div>
  <div class="st-height-b120 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">Change Password</h2>
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
          <div id="st-alert"></div>
          <form action="profile_pic_change.php" class="row st-contact-form st-type1" method="post" enctype="multipart/form-data" >

            <div class="st-form-field st-style1">
              <input type="hidden" name="hidden_id" placeholder="Id" required value="<?php echo $data['ID'] ?>">
            </div>

            <div class="col-lg-6">
              <div class="st-form-field st-style1">
              <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">USER_IMAGE</label>
                        <input type="file" class="form-control mb-4" id="exampleFormControlInput1" onChange="readURL(this)" name="u_image">
                        <img id="proimg" src="<?php echo $data['USER_IMAGE'] ?>" height=100 />
                    </div>
                    <button type="submit" style="margin-left: 50%;" class="st-btn st-style1 st-color1 st-size-medium" name="btn">Update</button>
                </form>
            </div>
        </div>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js">
        </script>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#proimg')
                            .attr('src', e.target.result)
                            .width(250)
                            .height(250)
                            .css("visibility", "visible");
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
              </div>
            </div><!-- .col -->
        </div>
      </div><!-- .col -->
      
      </form>

    </div><!-- .col -->
  </div>
  </div>
  <div class="st-height-b120 st-height-lg-b80"></div>
</section>

<?php include('footer.php') ?>