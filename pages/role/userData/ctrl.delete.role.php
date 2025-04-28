
<?php
require '../../../includes/conn.php';

$id = $_GET['role_id'];

echo $id;

$delete_users = mysqli_query($conn, "DELETE FROM tbl_role WHERE role_id = '$id'");

header("location: ../list.role.php");




?>