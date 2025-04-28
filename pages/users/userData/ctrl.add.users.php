<?php
require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check_username = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$username'");
    $result = mysqli_num_rows($check_username);

    if ($result == 0) {
        $check_email = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email = '$email'");
        $result = mysqli_num_rows($check_email);

        if ($result == 0) {
            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

            $insert_user = mysqli_query($conn, "INSERT INTO tbl_users (firstname, middlename, lastname, username, email, password) VALUES ('$firstname', '$middlename', '$lastname', '$username', '$email', '$hashed_pass')");
        } else {
            header("location: ../list.users.php");
        }
    } else {
        header("localhost: ../add.users.php");
    }

}

?>