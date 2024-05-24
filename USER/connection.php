<?php
$con = mysqli_connect('localhost', 'root', '', 'eproject');
if (!$con) {
    echo "<script>alert('connction error');window.location.href='index.php'</script>";
}
