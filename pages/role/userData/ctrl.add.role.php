<?php

require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

    $role = mysqli_real_escape_string($conn, $_POST['role']);
   
        $check_role= mysqli_query($conn, "SELECT * FROM tbl_role WHERE role = '$role'");
        $result_role = mysqli_num_rows($check_role);

        if ($result_role == 0) {
            $insert_role = mysqli_query($conn, "INSERT INTO tbl_role (role) VALUES ('$role')");
        
            header("location: ../list.role.php");
        }
    } else {
        header("location: ../add.role.php");
        
    
    }


?>