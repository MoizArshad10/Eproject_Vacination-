<?php include('header.php');
include('connection.php');
$i = $_GET['id'];
$q = "select * from users where id='$i'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res)
?>
<div class="container-fluid p-0">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="white_box bg-dark  mb_30">
        <div class="box_header ">
          <div class="main-title">
            <h3 class="mb-0" style="color:2DAAB8;">Change Your Password From Here : </h3>
          </div>
        </div>
        <form method="POST" action="admin_pass_update.php">
          <div class="mb-3">
            <div class="st-form-field st-style1">
              <input type="hidden" name="hidden_id" placeholder="Id" required value="<?php echo $data['ID'] ?>">
            </div>
            <label class="form-label" for="exampleFormControlInput1">Your Old Password :</label>
            <input type="text" class="form-control" name="pass" id="exampleFormControlInput1" value="<?php echo $data['PASSWORD'] ?>" required>

          </div>

          <button type="submit" class="btn btn-primary form-control" name="sub">Update</button>
        </form>
      </div>
    </div>
  </div>
  <?php include('footer.php') ?>