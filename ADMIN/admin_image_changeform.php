<?php include('header.php');
include('connection.php');
$i = $_GET['id'];
$q = "select * from USERS where ID='$i'";
$res = mysqli_query($con, $q);
$data = mysqli_fetch_assoc($res);


?>

<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_box bg-dark mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" style="color:2DAAB8">Change Your Image</h3>
                    </div>
                </div>
                <form method="POST" action="admin_image_query.php" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="u_id" value="<?php echo $data['ID'] ?>">

                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">USER_IMAGE</label>
                        <input type="file" class="form-control mb-4" id="exampleFormControlInput1" onChange="readURL(this)" name="u_image">
                        <img id="proimg" src="<?php echo $data['USER_IMAGE'] ?>" height=100 />
                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="btn">UPDATE</button>
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

        <?php include('footer.php') ?>