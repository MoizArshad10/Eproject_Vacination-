<?php include('header.php');
include('connection.php');
$q = "SELECT users.USERNAME,child_details.CHILD_NAME,hospital.HOSPITAL_NAME,vaccine_detail.VACCINE_NAME,appointment.DATE,appointment.STATUS,appointment.TIME,appointment.REMARKS FROM `appointment` join users on users.ID=appointment.USER_ID_FK join child_details on child_details.ID=appointment.CHILD_ID_FK join hospital on hospital.ID=appointment.HOSPITAL_ID_FK join vaccine_detail on vaccine_detail.ID=appointment.VACCINE_ID_FK";
$res = mysqli_query($con, $q);
$q1 = "select * from appointment";
$res1 = mysqli_query($con, $q1);
$data1 = mysqli_fetch_assoc($res1);

?>

<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        <h4 style="color:2DAAB8;">Appointments</h4>
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
                                    <th scope="col">Parent Name</th>
                                    <th scope="col">Child Name</th>
                                    <th scope="col">Hospital</th>
                                    <th scope="col">Vaccine</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Remarks</th>
                                    <th scope="col">Delete/Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td><?php echo $data['USERNAME'] ?></td>
                                        <td><?php echo $data['CHILD_NAME'] ?></td>
                                        <td><?php echo $data['HOSPITAL_NAME'] ?></td>
                                        <td><?php echo $data['VACCINE_NAME'] ?></td>
                                        <td><?php echo $data['DATE'] ?></td>
                                        <td><?php echo $data['STATUS'] ?></td>
                                        <td name="time_id"><?php echo $data['TIME'] ?></td>
                                        <td><?php echo $data['REMARKS'] ?></td>
                                        <td><a href="appointment_delete.php?id=<?php echo $data1['ID'] ?>"><i class="ti-trash"></i></a>
                                            <a href="appointment_form_update.php?id=<?php echo $data1['ID'] ?>"> <i class="ti-pencil"></i> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
</div>
                    </div>
                </div>
                            <?php include('footer.php') ?>