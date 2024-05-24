<?php include ('header.php');
include('connection.php');
$id=$_GET['id'];
$q="SELECT users.USERNAME,child_details.CHILD_NAME,hospital.HOSPITAL_NAME,vaccine_detail.VACCINE_NAME,appointment.DATE,
appointment.STATUS,appointment.TIME,appointment.REMARKS FROM `appointment` join users on users.ID=appointment.USER_ID_FK join 
child_details on child_details.ID=appointment.CHILD_ID_FK join hospital on hospital.ID=appointment.HOSPITAL_ID_FK join
 vaccine_detail on vaccine_detail.ID=appointment.VACCINE_ID_FK where USERNAME='$id'";
$res=mysqli_query($con,$q);
$q1="select * from appointment";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);
?>
<section class="st-shape-wrap" id="contact">
      <div class="st-shape1"><img src="assets/img/shape/contact-shape1.svg" alt="shape1"></div>
      <div class="st-shape2"><img src="assets/img/shape/contact-shape2.svg" alt="shape2"></div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
      <div class="st-section-heading st-style1">
            <h2 class="st-section-heading-title">Appointments</h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/favicon.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
         <?php 
         if( mysqli_num_rows($res)== 0){
            ?>
            <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="message p-5 m-3 shadow-lg ">
                        <h5>No Appointment Booked Yet <a href="appointment_form.php" class="text-decoration-none text-primary btn btn-outline-warning " >Click Here To Book Now</a></h5>
                    </div>
                </div>
            </div>
         </div>
            <?php
         } else{
         ?>
         

          <div class="container-fluid  ">
          <?php while($data=mysqli_fetch_assoc($res)) { ?>
           <div class="row py-5 bg-body-tertiary">
           <div class="col-lg-2 m-2  p-2   " style="border-radius: 50px; background-color:#f4f4f4;" >
                <h5>Parent Name:</h5>
               <h4 class="">
               <?php echo $data['USERNAME']?>
               </h4>
            </div>
            <div class="col-lg-2 m-2  p-2  " style="border-radius: 50px; background-color:#f4f4f4;" >
                <h5>Child Name:</h5>
               <h4 class="">
               <?php echo $data['CHILD_NAME']?>
               </h4>
            </div>
            <div class="col-lg-5 m-2  p-2  " style="border-radius: 50px; background-color:#f4f4f4;" >
                <h5>HOSPITAL:</h5>
               <h4 class="">
               <?php echo $data['HOSPITAL_NAME']?>
               </h4>
            </div>
            <div class="col-lg-2 m-2  p-2  " style="border-radius: 50px; background-color:#f4f4f4;" >
                <h5>Vaccine:</h5>
               <h4 class="">
               <?php echo $data['VACCINE_NAME']?>
               </h4>
            </div>
            <div class="col-lg-2 m-2  p-2  " style="border-radius: 50px; background-color:#f4f4f4;" >
                <h5>DATE:</h5>
               <h4 class="">
               <?php echo $data['DATE']?>
               </h4>
            </div>
            <div class="col-lg-2 m-2  p-2  " style="border-radius: 50px; background-color:#f4f4f4;" >
                <h5>STATUS:</h5>
               <h4 class="">
               <?php echo $data['STATUS']?>
               </h4>
            </div>
            <div class="col-lg-2 m-2  p-2  " style="border-radius: 50px; background-color:#f4f4f4;" >
                <h5>TIME:</h5>
               <h4 class="">
               <?php echo $data['TIME']?>
               </h4>
            </div>
            <div class="col-lg-2 m-2  p-2  " style="border-radius: 50px; background-color:#f4f4f4;" >
                <h5>REMARKS:</h5>
               <h4 class="">
               <?php echo $data['REMARKS']?>
               </h4>
            </div>
            <div class="col-lg-2 m-2  p-2  btn btn-outline-danger text-light" style="border-radius: 50px;" >
                <h5 class="text-danger  " >Delete:</h5>
               <h4 class="">
               <a href="user_app_delete.php?id=<?php echo $data1['ID']?>"  >Delete </a>
               </h4>
            </div>
           </div>
           <?php } ?>
          </div>
         
         <?php } ?>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
<?php include ('footer.php') ?>