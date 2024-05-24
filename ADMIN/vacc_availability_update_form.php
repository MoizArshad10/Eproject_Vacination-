<?php include('header.php');
include('connection.php');
$x = $_GET['id'];
$q = "select * from vaccine_availability where ID='$x'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);
$q1 = "select * from vaccine_detail ";
$res1 = mysqli_query($con, $q1);
?>



<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_box mb_30 bg-dark text-light">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" style="color:2DAAB8">Add Vaccine</h3>
                    </div>
                </div>
                <form method="POST" action="vacc_availability_update.php">
                    <input type="hidden" class="form-control" name="app_id" value="<?php echo $data['ID'] ?>">

                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Vaccine</label>
                        <select class="form-control" name="vaccine_id_fk">
                            <?php while ($data1 = mysqli_fetch_assoc($res1)) { ?>
                                <option value="<?php echo $data1['ID'] ?>="> <?php echo $data1['VACCINE_NAME'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Status</label>
                        <select class="form-control" name="status">
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="sub">Add</button>
                </form>
            </div>
        </div>


        <?php include('footer.php') ?>