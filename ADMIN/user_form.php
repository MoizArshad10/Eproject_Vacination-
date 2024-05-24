<?php include('header.php');
include('connection.php');
$q = "select * from role";
$res = mysqli_query($con, $q);

?>


<div class="container-fluid p-0">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-12 p-3">
            <div class="bg-dark shadow-lg text-light mb_30 p-5 ">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" style="color: #2DAAB8;">Add Your User</h3>
                    </div>
                </div>
                <form method="POST" action="user_insert.php" enctype="multipart/form-data">
                    <div class="mb-3 ">
                        <label class="form-label" for="exampleFormControlInput1">ROLE NAME</label>
                        <select class="form-control" name="u_r_id">
                            <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                <option value="<?php echo $data['ID'] ?>"> <?php echo $data['ROLE_NAME'] ?> </option>
                            <?php } ?>
                        </select>
                        <label class="form-label" for="exampleFormControlInput1">USERNAME</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="u_name" required>
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label" for="exampleFormControlInput1">PASSWORD</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="pwsd" required>
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label" for="exampleFormControlInput1">CONTACT</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="cnt" required>
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label" for="exampleFormControlInput1">USER_IMAGE</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" onChange="readURL(this)" name="u_image">
                        <img id="proimg" />
                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="btn">Add</button>

                </form>
            </div>
        </div>
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

<?php include('footer.php') ?>

