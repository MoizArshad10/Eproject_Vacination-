<?php include('header.php');
include('connection.php');
$q = "select * from users where ROLE_ID_FK='3'";
$res = mysqli_query($con, $q);
?>
<div class="container-fluid vh-100 p-0">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="white_box bg-dark text-light mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" style="color:2DAAB8;">Add Hospitals</h3>
                    </div>
                </div>
                <form method="POST" action="hospital_insert.php" enctype="multipart/form-data" class="col-12">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">User Name</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exampleFormControlInput1" name="hospital_id">
                                <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                    <option value="<?php echo $data['ID'] ?>"> <?php echo $data['USERNAME'] ?> </option>
                                <?php } ?>
                            </select>
                            <br>
                            <label class="form-label" for="exampleFormControlInput1">Hospital Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="hospital_name" required>
                            <div class="mb-3">
                                <br>
                                <label class="form-label" for="exampleFormControlInput1">Location</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="location" required>
                                <div class="mb-3">
                                    <br>
                                    <label class="form-label" for="exampleFormControlInput1">Contact</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="contact" required>
                                    <br>
                                    <label class="form-label" for="exampleFormControlInput1">Insert Image</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1" name="img" onChange="readURL(this)">
                                    <img id="proimg" />
                                    <br>
                                    <label class="form-label" for="exampleFormControlInput1">Details</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="dtl" required>
                                    <br>
                                </div>
                                <button type="submit" class="btn btn-primary form-control" name="btn">Add</button>
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