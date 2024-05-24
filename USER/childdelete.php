 <?php 

include('connection.php');
$x = $_GET['id'];
$delete_appointment = mysqli_query($con,"DELETE FROM `appointment` WHERE `CHILD_ID_FK` = '$x'");
if($delete_appointment){
    
$q = "delete from `child_details` where ID = '$x'";
$res = mysqli_query($con,$q);
if ($res) {
    echo "<script>alert('Delete Succesfully');window.location.href='child_detail_show.php'</script>";
} else {
    echo mysqli_error($con);
}
}

?>