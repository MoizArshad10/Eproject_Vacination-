
<?php
include("connection.php");
$x = $_GET['id'];

$q = mysqli_query($con, "DELETE FROM `vaccine_availability` WHERE `ID`= '$x'");
if ($q = true) {
    echo "<script>
    alert( 'Deleted Successfully' );
    window.location.href = 'vacc_availability_show.php';
    </script>";
}
?>