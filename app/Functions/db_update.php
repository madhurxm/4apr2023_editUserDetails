<?php
session_start();

require("../../config/db_conn.php");
$username = $_SESSION["username"];
if (!empty($_REQUEST['key'] && $_REQUEST['value'])) {
    $key = $_REQUEST['key'];
    $val = $_REQUEST['value'];
    if ($conn) {
        $update_query = "UPDATE employee_details SET $key = '$val' WHERE username = '$username';";
        if (mysqli_query($conn, $update_query)) {
            echo ("Record Updated");
        } else {
            echo ("Query not run");
        }

    } else {
        echo ("Connection not establish");
    }
} else {
    echo ($_REQUEST['key'] . " can not be blank");
}
?>