<?php include('header.php');
include('connection.php');
$i = $_GET['id'];
$query = "select * from users where USERNAME='$i'";
$res = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($res); ?>
<style>
    .align {
        float: left;
        margin-left: 20%;
        margin-top: 3%;
        height: 300;
        width: 300;
    }

    .align-text {
        float: left;
        margin-left: 25%;
        margin-top: 1%;
        color: #2daab8;

    }

    .aligntab {
        margin-top: 2%;
        margin-left: 20%;
        margin-bottom: 5%;

    }

    th {
        color: #2daab8;
    }
</style>
<h1 style="color: #2daab8;margin-left: 10%;">MY PROFILE</h1>
<div class="row">
    <div class="col-lg-12">
        <img src="<?php echo $data['USER_IMAGE'] ?>" class="align">
    </div>
    <div class="col-lg-12">
        <h6 class="align-text"><a href="admin_image_changeform.php?id=<?php echo $data['ID'] ?>">Change Profile Picture</a></h6>
    </div>
    <div class="col-lg-12">
        <table class="aligntab">
            <tr>
                <th>Username :</th>
                <td><?php
                    if (isset($_SESSION['HOSP_NAME'])) {
                        echo $_SESSION['HOSP_NAME'];
                    } else if (isset($_SESSION['ADMIN_NAME'])) {
                        echo $_SESSION['ADMIN_NAME'];
                    }
                    ?></td>
            </tr>
            <tr>
                <th>Password :</th>
                <td><?php echo $data['PASSWORD'] ?><span><a href="admin_pass_changeform.php?id=<?php echo $data['ID'] ?>"> (Change Your Password)</a></span></td>
            </tr>
            <tr>
                <th>Contact No :</th>
                <td><?php echo $data['CONTACT'] ?></td>
            </tr>

        </table>
    </div>
</div>


<?php include('footer.php') ?>