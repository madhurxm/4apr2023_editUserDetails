<?php
require("../../config/db_conn.php");
if ($conn) {
    if ((!empty($_REQUEST["emp_id"])) && (empty($_REQUEST["reg_username"]))) {

        // ===== Emp ID =====//
        $emp_id = $_REQUEST["emp_id"];
        $check_emp_id = "SELECT * FROM employee_details where `emp_id` = '$emp_id';";

        if (mysqli_query($conn, $check_emp_id)) {
            if (mysqli_num_rows(mysqli_query($conn, $check_emp_id)) == 1)
                echo ("Employee ID already exists. Please login.");
            else
                echo ("1");
        } else {

            echo (mysqli_error($conn));
        }
    } elseif (!empty($_REQUEST["reg_username"])) {

        // ===== Username =====//
        $username = $_REQUEST["reg_username"];
        $check_username = "SELECT * FROM employee_details where `username` = '$username';";

        if (mysqli_query($conn, $check_username)) {
            if (mysqli_num_rows(mysqli_query($conn, $check_username)) == 1)
                echo ("Username already taken. Please try another one.");
            else
                echo ("Entered Username is available");
        } else {
            echo (mysqli_error($conn));
        }
    } else {
        echo ("Input Accepted ");
    }
} else {
    echo ("Connection not established");
}
