<?php include('header.php') ?>


<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_box bg-dark text-light p-xl-5 mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0" style="color: 2DAAB8;">Add Your Categories</h3>
                    </div>
                </div>
                <form method="POST" action="cat_insert.php">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Cateogry Name</label>
                        <input type="text" class="form-control" name="cat_name" id="exampleFormControlInput1" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Details</label>
                        <input type="text" class="form-control" name="dtls" id="exampleFormControlInput1" required>

                    </div>
                    <button type="submit" class="btn btn-primary form-control" name="sub">Add</button>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>