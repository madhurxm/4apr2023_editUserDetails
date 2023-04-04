<?php

session_start();
if (!isset($_SESSION["username"])) {
    header("location: http://localhost/MM-Projects/MAR'23/18Mar_-_User_profille_project/app/Webpages/login.php");
    echo ("isset");
} else {
    // echo ("session stored of other user");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <!-- == CSS file == -->
    <link rel="stylesheet" href="../../resources/css/profile_page_styling.css" type="text/css">

    <!-- ===== BOOTSTRAP CDN ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- ====jQuery CDN ==== -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!------FONT CDN----->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />

    <!-- == CSS == -->

    <style>
        body {
            background: rgb(218, 137, 112);
            background: linear-gradient(90deg, rgba(218, 137, 112, 1) 6%, rgba(218, 217, 112, 1) 25%, rgba(165, 223, 106, 1) 50%, rgba(232, 136, 149, 1) 75%);
            /* font-family: 'Bebas Neue', cursive; */
            font-family: "Merriweather", serif;
        }
        p{
            font-family: 'Bebas Neue', cursive; 
        }
    </style>

</head>

<body>
    <?php
    require("../../config/db_conn.php");
    if ($conn) {
        $username = $_SESSION["username"];
        $data = "SELECT * FROM `EMPLOYEE_DETAILS` WHERE `USERNAME` = '$username';";
        $data1 = mysqli_query($conn, $data);
        if ($data1) {

            $row = mysqli_fetch_assoc($data1);

            $name = $row["name"];
            $emp_id = $row["emp_id"];
            $designation = $row["designation"];
            $department = $row["department"];

            $mobile = $row["mobile"];
            $email = $row["email"];
            $dob = $row["dob"];
            $blood_group = $row["blood_group"];

            $address = $row["address"];
            $skills = $row["skills"];
            $passport = $row["passport"];
            $salary = $row["salary"];

            $pfp = $row["pfp"];
            $resume = $row["resume"];
    ?>



            <!-- ======== CONTAINER Started ======= -->
            <div class="container">

                <!-- ==== NAVBAR ==== -->
                <div class="row mb-3">
                    <div class="col-md-10 mb-4">
                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top mb-3">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">
                                    <img src="../../resources/img/mawai_logo.png" alt="Mawai" title="Mawai" style="width:100px;" class="float-start">
                                </a>
                                <a class="navbar-brand" href="../Verification/destroy_session.php">
                                    <img src="../../resources/img/logout.jpg" alt="Log Out" title="Log Out" style="width:30px;" class="float-end invert" id="logout_btn">

                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- ==== Content ==== -->

                <div class="row mt-3">

                    <!-- == Column 1 == -->

                    <div class="col-sm-3 m-3" id="col_1" style="padding-left: 0px; padding-right: 0px">

                        <!-- == Profile Photo == -->
                        <div class="card" id="profile_pic_card">
                            <div class="card-body bg-secondary" id="profile_pic_card_body">
                                <div class="card-body pb-0" style="text-align: center;">
                                    <img src="../../data_storage/img/<?php echo ("$pfp"); ?>" style="width:100px;" class="card-img-top rounded-circle">
                                </div>
                                <div class="card-body p-0" style="text-align: center;">
                                    <h5 class="card-title pt-0 pb-0"><b><?php echo ("$name"); ?></b></h5>
                                    <p class="card-text pb-1"><?php echo ("$designation"); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- == Information == -->
                        <div class="mb-3" style="text-align: center;" id="info_card_body">
                            <div class="m-2">
                                <h3><?php echo ("$emp_id"); ?></h3>
                                <p>EMP ID</p>
                            </div>
                            <div class="m-2">
                                <h3><?php echo ("$department"); ?></h3>
                                <p>Department</p>
                            </div>
                            <div class="m-2">
                                <h3><?php echo ("$salary"); ?></h3>
                                <p>Salary</p>
                            </div>
                            <div class="m-2">
                                <h3><?php echo ("$username"); ?></h3>
                                <p>User-Name</p>
                            </div>

                        </div>

                    </div>
                    <!-- == Column 2 == -->
                    <div class="col-sm-8 m-3" id="col_1" style="padding-left: 0px; padding-right: 0px">

                        <!-- ===== Personal Details ==== -->
                        <div class="row m-3">
                            <b>
                                <h3>Personal Details</h3>
                            </b>
                            <div class="row">
                                <div class="col-sm-4 media">
                                    <div class="inline_items">
                                        <label><b>Mobile : &nbsp;</b></label>
                                        <p><?php echo ("$mobile"); ?></p>
                                    </div>
                                    <div class="inline_items">
                                        <label style="white-space: nowrap;"><b>E-Mail : &nbsp;</b></label>
                                        <p style="overflow-wrap: anywhere;"><?php echo ("$email"); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-4 media">
                                    <div class="inline_items">
                                        <label><b>DOB : &nbsp;</b></label>
                                        <p><?php echo ("$dob"); ?></p>
                                    </div>
                                    <div class="inline_items">
                                        <label><b>Blood Group : &nbsp;</b></label>
                                        <p><?php echo ("$blood_group"); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-4 media">
                                    <div class="inline_items">
                                        <label style="white-space: nowrap;"><b>Address : &nbsp;</b></label>
                                        <p style="overflow-wrap: anywhere;"><?php echo ("$address"); ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- ==== Skills ===== -->
                        <div class="row m-3">
                            <div class="col-sm-6 media">

                                <div class="">
                                    <label style="white-space: nowrap;"><b>SKILLS &nbsp;</b></label>
                                    <p><?php echo ("$skills"); ?></p>
                                </div>

                            </div>


                        </div>

                        <!-- ==== Passport ===== -->
                        <div class="row m-3">

                            <div class="col-sm-6 media">
                                <div class="inline_items">
                                    <label><b> Have Passport? &nbsp;</b></label>
                                    <p><?php echo ("$passport"); ?></p>
                                </div>
                            </div>

                        </div>

                        <!-- ==== Resume ===== -->
                        <div class="row m-3">
                            <div class="col-sm-12 media">

                                <div class="inline_items">
                                    <label style="white-space: nowrap;">
                                        <b>View your resume from</b>
                                        <a href="../../data_storage//resume/<?php echo ("$resume"); ?>" target="_blank"><b>Here</b></a>
                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>




            </div>

            </div>

            </div>
    <?php

        } else {
            echo (mysqli_error($conn));
        }
    } else {
        echo ("Connection Not established");
    }

    ?>
    <!-- <script src="../../resources/JS/destroy_session.php"></script> -->
</body>

</html>