<?php
if (!empty($_REQUEST['login_username']) && $_REQUEST['login_pass']) {
    $login_username = $_REQUEST['login_username'];
    $login_pass = sha1($_REQUEST['login_pass']);
    require("../../config/db_conn.php");
    if ($conn) {

        $check_login_username = "SELECT * FROM `employee_details` where `username` = '$login_username'";
        if (mysqli_query($conn, $check_login_username)) {
            if (mysqli_num_rows(mysqli_query($conn, $check_login_username)) != 1) {
                echo ("Username do not exist. Please enter correct username or register");
            } else {
                $check_login_details = "SELECT * FROM `employee_details` where `username` = '$login_username' and `password` = '$login_pass';";
                if (mysqli_query($conn, $check_login_details)) {
                    if (mysqli_num_rows(mysqli_query($conn, $check_login_details)) == 1) {
                        $row = mysqli_fetch_assoc(mysqli_query($conn, $check_login_details));

                        echo ("Welcome " . strtoupper($row['name']));
                        session_start();
                        $_SESSION['username'] = $row['username'];
                    } else {
                        echo ("Username and Password not matched.");
                    }
                } else {
                    echo (mysqli_error($conn));
                }
            }
        } else {
            echo (mysqli_error($conn));
        }
    } else {
        echo ("Connection not established!");
    }
} else {
    echo ("Enter username and password");
}
