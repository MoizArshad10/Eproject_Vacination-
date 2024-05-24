<?php include('header.php');
include('connection.php');
$q = "select * from category";
$res = mysqli_query($con, $q);

?>


<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_box bg-dark text-light mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" style="color: 2DAAB8;">vaccine detail</h3>
                    </div>
                </div>
                <form method="POST" action="vacc_insert.php">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Category</label>
                        <select class="form-control" name="c_id">
                            <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                <option value="<?php echo $data['ID'] ?>"> <?php echo $data['CAT_NAME'] ?> </option>
                            <?php } ?>
                        </select>
                        <label class="form-label" for="exampleFormControlInput1">VACCINE NAME</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="vacc_name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">VACCINE DOSAGE</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="dsg" required>
                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="btn">Add</button>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>