<?php include('header.php');
include('connection.php');
$q = "select * from users where ROLE_ID_FK=3";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);
$q1 = "select * from vaccine_detail ";
$res1 = mysqli_query($con, $q1);
$x = $_SESSION['HOSP_NAME'];
$q2 = "select HOSPITAL_NAME from hospital join users on users.ID=hospital.USER_ID_FK where users.USERNAME='$x'";
$res2 = mysqli_query($con, $q2);
$data2 = mysqli_fetch_assoc($res2);
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
                <form method="POST" action="vacc_availability_insert.php">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">User</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" disabled value="<?php echo $_SESSION['HOSP_NAME'] ?>">
                        <input type="hidden" class="form-control" name="user_id_fk" id="exampleFormControlInput1" value="<?php echo $_SESSION['HOSP_ID'] ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Vaccine</label>
                        <select class="form-control" name="vaccine_id_fk">
                            <?php while ($data1 = mysqli_fetch_assoc($res1)) { ?>
                                <option value="<?php echo $data1['ID'] ?>"> <?php echo $data1['VACCINE_NAME'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Status</label>
                        <select class="form-control" name="status">
                            <option value=""></option>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Hospital</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" disabled value="<?php echo $data2['HOSPITAL_NAME'] ?>" required>
                        <input type="hidden" class="form-control" name="hospital" id="exampleFormControlInput1" value="<?php echo $data2['HOSPITAL_NAME'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="sub">Add</button>
                </form>
            </div>
        </div>


        <?php include('footer.php') ?>