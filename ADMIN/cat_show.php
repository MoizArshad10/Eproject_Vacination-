<?php
include('header.php');
include('connection.php');
$query = "select * from category";
$res = mysqli_query($con, $query); ?>


<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="QA_section ">
                    <div class="white_box_tittle list_header">
                        <h4 style="color:2DAAB8;">Category</h4>
                        <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">
                                    <form Active="#">
                                        <div class="search_field">

                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="add_button ms-2">
                            </div>
                        </div>
                    </div>
                    <div class="QA_table bg-dark  mb_30">

                       <div class="responsive-table">
                       <table class="table bg-dark ">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td><?php echo $data['ID'] ?></td>
                                        <td><?php echo $data['CAT_NAME'] ?></td>
                                        <td><?php echo $data['DETAILS'] ?></td>
                                        <td><a href="cat_update_form.php?id=<?php echo $data['ID'] ?>"><i class="ti-pencil"></i></a></td>
                                        <td><a href="cat_delete.php?ID=<?php echo $data['ID'] ?>"><i class="ti-trash"></i></a></td>

                                        <!-- <td><a href="#" class="status_btn">Active</a></td> -->
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>    
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>