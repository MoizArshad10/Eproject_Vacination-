<?php include('header.php');
include('connection.php');
$i = $_GET['id'];
$q = "select * from vaccine_detail where ID='$i'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);

$q1 = "select * from category";
$res1 = mysqli_query($con, $q1);

?>

<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_box text-light bg-dark mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" style="color: 2DAAB8;">VACCINE AVAILABILITY</h3>
                    </div>
                </div>
                <form method="POST" action="vacc_update.php">
                    <input type="hidden" class="form-control" name="vacc_id" value="<?php echo $data['ID'] ?>">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Category</label>
                        <select class="form-control" name="c_id">
                            <?php while ($data1 = mysqli_fetch_assoc($res1)) { ?>
                                <option value="<?php echo $data1['ID'] ?><?php if ($data1['ID'] == $data['CAT_ID_FK']) {
                                                                                echo 'selected';
                                                                            }  ?>"> <?php echo $data1['CAT_NAME'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">

                        <label class="form-label" for="exampleFormControlInput1">VACCINE NAME</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="vacc_name" value="<?php echo $data['VACCINE_NAME'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">VACCINE DOSAGE</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="dsg" value="<?php echo $data['DOSAGE'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="btn">UPDATE</button>
                </form>
            </div>
        </div>
        <?php include('footer.php') ?>