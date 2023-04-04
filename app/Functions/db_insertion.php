<?php
if (
    !empty($_REQUEST["name"] && $_REQUEST["emp_id"] && $_REQUEST["designation"] && $_REQUEST["department"]
        && $_REQUEST["mobile"] && $_REQUEST["email"] && $_REQUEST["dob"] && $_REQUEST["blood_group"] && $_REQUEST["address"]
        && $_REQUEST["skills"] && $_REQUEST["passport"] && $_REQUEST["salary"] && $_REQUEST["reg_username"] && $_REQUEST["reg_pass"]
        && $_FILES["pfp"]['name'] && $_FILES["resume"]['name'])
) {
    $name = $_REQUEST["name"];
    $emp_id = $_REQUEST["emp_id"];
    $designation = $_REQUEST["designation"];
    $department = $_REQUEST["department"];

    $mobile = $_REQUEST["mobile"];
    $email = $_REQUEST["email"];
    $email = "\"" . $email . "\"";
    $dob = $_REQUEST["dob"];
    $blood_group = $_REQUEST["blood_group"];

    $address = $_REQUEST["address"];
    $skills = $_REQUEST["skills"];
    $skills = implode(", ", $skills);
    $passport = $_REQUEST["passport"];
    $salary = $_REQUEST["salary"];

    $reg_username = $_REQUEST["reg_username"];

    $reg_pass = sha1($_REQUEST["reg_pass"]);

    // $pfp = $_FILES["pfp"]['name'];
    // $resume = $_FILES["resume"];

    $pfp_name = basename($_FILES["pfp"]['name']);
    $pfp_ext = pathinfo($pfp_name, PATHINFO_EXTENSION);
    $_FILES["pfp"]['name'] = $emp_id .".". $pfp_ext;
    $pfp = $_FILES["pfp"]['name'];
    move_uploaded_file($_FILES["pfp"]['tmp_name'], "../../data_storage/img/" . $pfp);

    $resume_name = basename($_FILES["resume"]['name']);
    $resume_ext = pathinfo($resume_name, PATHINFO_EXTENSION);
    $_FILES["resume"]["name"] = $emp_id .".". $resume_ext;
    $resume = $_FILES["resume"]["name"];
    move_uploaded_file(($_FILES["resume"]['tmp_name']), "../../data_storage/resume/" . $resume);


    require("../../config/db_conn.php");
    if ($conn) {
        $insert_query = "INSERT INTO `employee_details` ( `name`, `emp_id`, `designation`, `department`, `mobile`, `email`, `dob`, `blood_group`, `address`, `skills`, `passport`, `salary`, `username`, `password`, `pfp`, `resume`) VALUES ('$name', '$emp_id', '$designation', '$department', '$mobile', '$email', '$dob', '$blood_group', '$address', '$skills', '$passport', '$salary', '$reg_username', '$reg_pass', '$pfp', '$resume');";

        if (mysqli_query($conn, $insert_query)) {
            echo ("Registration Successful");
            // header("location:../Webpages/login.php");
        } else {
            echo (mysqli_error($conn));
        }
    } else {
        echo ("Connection not established to Database");
    }
} else {
    echo ("Fill all values in form.");
    

}
