<?php include('header.php');
include('connection.php');
$x = $_GET['id'];
$q = "select * from hospital where ID='$x'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);
?>
<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_box bg-dark text-light mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" style="color: 2DAAB8;">Update Hospitals</h3>
                    </div>
                </div>
                <form method="POST" action="hospital_update.php" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="exampleFormControlInput1" name="HOSPITAL_ID" value="<?php echo $data['ID'] ?>">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Hospital Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="HOSPITAL_NAME" value="<?php echo $data['HOSPITAL_NAME'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Location</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="LOCATION" value="<?php echo $data['LOCATION'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Contact</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="CONTACT" value="<?php echo $data['CONTACT'] ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Details</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="DETAILS" value="<?php echo $data['DETAILS'] ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">USER_IMAGE</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" onChange="readURL(this)" name="h_image">
                        <img id="proimg" src="<?php echo $data['HOSPITAL_PIC'] ?>" height=70 />
                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="btn">Update</button>
                </form>
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