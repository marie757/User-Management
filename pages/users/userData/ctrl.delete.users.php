<?php
require '../../../includes/conn.php';

$id = $_GET['user_id'];

echo $id;

$delete_user = mysqli_query($conn, "DELETE FROM tbl_user WHERE user_id = '$id'");

header("location: ../list.user.php");

?>