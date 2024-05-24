<?php
include('header.php');
include('connection.php');
$q = "SELECT users.USERNAME,vaccine_detail.VACCINE_NAME,vaccine_availability.STATUS,vaccine_availability.HOSPITAL 
FROM `vaccine_availability` join users on users.ID=vaccine_availability.USER_ID_FK
join vaccine_detail on vaccine_detail.ID=vaccine_availability.VACCINE_ID_FK";
$res = mysqli_query($con, $q);

$query = "select * from vaccine_availability";
$res1 = mysqli_query($con, $query);
$data1 = mysqli_fetch_assoc($res1);
?>


<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="QA_section p-xl-5">
                    <div class="white_box_tittle list_header">
                        <h4 style="color:2DAAB8">Vaccine Availability</h4>
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
                    <div class="QA_table bg-dark mb_30">

                       <div class="responsive-table">
                       <table class="table bg-dark">
                            <thead>
                                <tr>

                                    <th scope="col">USER NAME</th>
                                    <th scope="col">VACCINE</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">HOSPITAL</th>
                                    <th scope="col">UPDATE</th>
                                    <th scope="col">DELETE</th>


                                </tr>
                            </thead>
                            <tbody>

                                <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td><?php echo $data['USERNAME'] ?></td>
                                        <td><?php echo $data['VACCINE_NAME'] ?></td>
                                        <td><?php echo $data['STATUS'] ?></td>
                                        <td><?php echo $data['HOSPITAL'] ?></td>
                                        <td><a href="vacc_availability_update_form.php?id=<?php echo $data1['ID'] ?>"><i class="ti-pencil"></i></a></td>
                                        <td><a href="vacc_availability_delete.php?id=<?php echo $data1['ID'] ?>"><i class="ti-trash"></i></a></td>
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