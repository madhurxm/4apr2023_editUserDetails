<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-----BOOTSTRAP CDN----->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

  <!-----FONT AWESOME CDN----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-----EXTERNAL CSS----->
  <link rel="stylesheet" href="resources/css/reg_login_page_styling.css" />
  <title>Registration Page</title>

  <!-----jQuery CDN---->
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

  <!------FONT CDN----->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <!-- ==== ALERT DIV ==== -->
    <div class="row alert_div" style="float:right; opacity:00%; word-wrap: break-word; width:40%">
      <div class="col-7"></div>
      <div class="col-5" id="alert_style_div" style=" content-visibility: auto" >
        <p class="alert_box" id="alert_box" ></p>
      </div>
    </div>
    <!-- ==== ALERT DIV END ==== -->

    <!-- =====FORM DIV==== -->
    <div class="boxx row" style="position: fixed">
      <div class="col col-md-6 p-0 overflow-hidden opacity-100">
        <img src="resources/img/vintage-1721884_960_720.jpg" />
      </div>
      <div class="col col-md-6 p-1" id="form_div">
        <div class="form-heading mb-5">
          <h1>Registration</h1>
        </div>

        <!--==========FORM Start==========-->

        <div class="form-container" style="position: fixed; width: 29%">
          <form enctype="multipart/form-data" method="POST" id="reg_form" class="reg_form">
            <!-------INSIDE FORM 1 ------>

            <div class="inside-form-1 mx-3" id="inside-form-1" val="1">

              <!--===NAME===-->
              <div class="form-floating mb-3 mt-1">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" maxlength="30" minlength="1" />
                <label for="name" class="form-label">Name</label>
                <!-- <div class="name_validation" style="opacity: 0%; position: absolute;">Please fill the name with Alphabets only.</div> -->
              </div>

              <!---Employee ID-->
              <div class="form-floating mb-3 mt-3">
                <input type="tel" id="emp_id" name="emp_id" class="form-control" maxlength="5" minlength="1" placeholder="Employee ID" />
                <label for="name" class="form-label">Employee ID</label>
                <!-- <div class="emp_id_validation" style="opacity: 0%; position: absolute;">Enter correct Employee ID.</div>
                </div>
                <div class="emp_id_validation" style="opacity: 0%; position: absolute;">Account for this Employee ID already exists.</div> -->
              </div>

              <!---Designation-->
              <div class="form-floating mb-3 mt-3">
                <input type="text" id="designation" name="designation" class="form-control" placeholder="Designation" />
                <label for="Designation" class="form-label">Designation</label>
              </div>

              <!---Department-->
              <div class="form-floating mb-1 mt-3">
                <input type="text" id="department" name="department" class="form-control" placeholder="department" />
                <label for="department" class="form-label">Department</label>
              </div>

              <!----NAV BUTTONS---->
              <div class="row d-flex align-items-center">
                <!----LOGIN BUTTON-->
                <div div class="col col-7 mt-3">
                  <p>
                    Already a Employee!
                    <button type="button" class="btn btn-sm btn-dark" id="to_login">
                      <span class="to_reg_page_btn_text" id="to_reg_page_btn_text">
                        &nbsp;LOGIN&nbsp;</span>
                      <div class=" text-light spinner-grow-sm" id="to_login_loader"></div>
                    </button>
                  </p>
                </div>

                <!----NEXT BUTTON-->
                <div class="col col-5">
                  <a href="#inside-form-2">
                    <i id="next-1" class="next-btn fa fa-angle-right" style="font-size: 48px; color: green; float: right">
                    </i></a>
                </div>
              </div>
            </div>

            <!-------FORM 1 END---------->
            <!-------INSIDE FORM 2 ------>

            <div class="inside-form-2 mx-3" id="inside-form-2">
              <!---Mobile-->
              <div class="form-floating mb-3 mt-3">
                <input type="tel" id="mobile" name="mobile" maxlength="10" minlength="10" class="form-control" placeholder="mobile" />
                <label for="mobile" class="form-label">Mobile</label>
              </div>

              <!---E-mail-->
              <div class="form-floating mb-3 mt-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
                <label for="email" class="form-label">E-mail</label>
              </div>

              <!---Date of Birth-->
              <div class="form-floating mb-3 mt-3">
                <input type="date" id="dob" name="dob" max="2005-01-01" min="1962-01-01" class="form-control" placeholder="dob" />
                <label for="dob" class="form-label">Date of Birth</label>
              </div>

              <!---Blood Group-->
              <div class="form-floating mb-3 mt-3">
                <select class="form-select" id="blood_group" name="blood_group">
                  <option selected value="">Select Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="O+">O+</option>
                  <option value="AB+">AB+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="O-">O-</option>
                  <option value="AB-">AB-</option>
                </select>
                <label for="blood_group" class="form-label">Blood Group</label>
              </div>

              <!----NAV BUTTONS---->
              <div class="row d-flex align-items-center">
                <!----PREV BUTTON-->
                <div class="col col-6">
                  <a href="#inside-form-1">
                    <i id="prev-2" class="next-btn fa fa-angle-left" style="font-size: 48px; color: green; float: left">
                    </i></a>
                </div>

                <!----NEXT BUTTON-->
                <div class="col col-6">
                  <a href="#inside-form-3">
                    <i id="next-2" class="next-btn fa fa-angle-right" style="font-size: 48px; color: green; float: right">
                    </i></a>
                </div>
              </div>
            </div>

            <!-------FORM 2 END---------->
            <!-------INSIDE FORM 3 ------>

            <div class="inside-form-3 mx-3" id="inside-form-3">
              <!---Address-->
              <div class="form-group mb-0.5 mt-0.5">
                <p class="mt-0 mb-0">Address</p>
                <label for="address" class="form-label"></label>
                <textarea id="address" class="form-control" placeholder="Address" name="address" rows="2"></textarea>
              </div>

              <!---Skills-->
              <div class="my-1">
                <p class=" ">Skills</p>
                <div class="form-check">
                  <input type="checkbox" id="programming" name="skills[]" class="form-check-input reg_cb" value="Programming" />
                  <label for="programming" class="form-check-label">Programming</label>

                </div>
                <div class="form-check">
                  <input type="checkbox" id="testing" name="skills[]" class="form-check-input reg_cb" value="Testing" />
                  <label for="testing" class="form-check-label ">Testing</label>
                  <!-- <input type="checkbox" id="testing" name="skills[]" class="form-check-input" value="checked-null" checked hidden/> -->
                </div>
                <div class="form-check">
                  <input type="checkbox" id="networking" name="skills[]" class="form-check-input reg_cb" value="Networking" />
                  <label for="networking" class="form-check-label">Networking</label>
                  <!-- <input type="checkbox" id="networking" name="skills[]" class="form-check-input" value="checked-null" checked hidden/> -->
                </div>
                <input type="checkbox" name="skills[]" class="form-check-input hidden_cb" value="checked_null" checked hidden />
                <input type="checkbox" name="skills[]" class="form-check-input hidden_cb" value="checked_null" checked hidden />
                <input type="checkbox" name="skills[]" class="form-check-input hidden_cb" value="checked_null" checked hidden />
                <input type="checkbox" name="skills[]" class="form-check-input hidden_cb" value="checked_null" checked hidden />
              </div>

              <!---Resume-->
              <div class="mb-3 mt-2">
                <label for="resume" class="form-label">Resume</label>
                <input type="file" id="resume" class="form-control" placeholder="" name="resume" accept="application/pdf" />
              </div>

              <!-----NAV BUTTONS----->
              <div class="row d-flex align-items-center">
                <!----PREV BUTTON-->
                <div class="col col-6">
                  <a href="#inside-form-2">
                    <i id="prev-3" class="next-btn fa fa-angle-left" style="font-size: 48px; color: green; float: left">
                    </i></a>
                </div>

                <!----NEXT BUTTON-->
                <div class="col col-6">
                  <a href="#inside-form-4">
                    <i id="next-3" class="next-btn fa fa-angle-right" style="font-size: 48px; color: green; float: right">
                    </i></a>
                </div>
              </div>
            </div>

            <!-------FORM 3 END---------->
            <!-------INSIDE FORM 4 ------>

            <div class="inside-form-4 mx-3" id="inside-form-4">
              <!---Passport-->
              <p class="form-check-label mt-3">Do you have Passport?</p>

              <div class="form-check mb-3">
                <input type="radio" id="yes" name="passport" class="form-check-input" value="YES" checked="checked" />
                <label class="form-check-label" for="yes">Yes</label>
              </div>

              <div class="form-check">
                <input type="radio" id="no" name="passport" class="form-check-input" value="NO" />
                <label class="form-check-label" for="no">No</label>
              </div>

              <!---pfp--->
              <div class="mb-4 mt-3">
                <label for="pfp" class="form-label form-label-lg">Upload Profile Picture</label>
                <input type="file" id="pfp" class="form-control form-control-lg" placeholder="" name="pfp" accept="image/jpeg, image/png" />
              </div>

              <!---Salary-->
              <div class="form-floating mb-4 mt-4">
                <input type="tel" id="salary" name="salary" class="form-control" placeholder="Salary" minlength="1" maxlength="7" />
                <label for="salary">Salary</label>
              </div>

              <!----NAV BUTTONS---->
              <div class="row d-flex align-items-center">
                <!----PREV BUTTON-->
                <div class="col col-6">
                  <a href="#inside-form-3">
                    <i id="prev-4" class="next-btn fa fa-angle-left" style="font-size: 48px; color: green; float: left">
                    </i></a>
                </div>

                <!----NEXT BUTTON-->
                <div class="col col-6">
                  <a href="#inside-form-5">
                    <i id="next-4" class="next-btn fa fa-angle-right" style="font-size: 48px; color: green; float: right">
                    </i></a>
                </div>
              </div>
            </div>

            <!-------FORM 4 END---------->
            <!-------INSIDE FORM 5 ------>

            <div class="inside-form-1 mx-3" id="inside-form-5">
              <!---USERNAME-->
              <div class="form-floating mb-5 mt-5">
                <input type="text" id="reg_username" name="reg_username" class="form-control form-control-lg" placeholder="User Name" maxlength="8" />
                <label for="reg_username" class="form-label">User Name</label>
              </div>

              <!---Password-->
              <div class="form-floating mb-5 mt-5">
                <input type="password" id="reg_pass" name="reg_pass" maxlength="8" class="form-control form-control-lg" placeholder="Password" />
                <label for="reg_pass" class="form-label">Password</label>
              </div>

              <!----NAV BUTTONS---->
              <div class="row d-flex align-items-center mt-5 mb-5">
                <!----PREV BUTTON-->
                <div class="col col-6">
                  <a href="#inside-form-4">
                    <i id="prev-5" class="next-btn fa fa-angle-left" style="font-size: 48px; color: green; float: left">
                    </i></a>
                </div>

                <!----NEXT BUTTON-->
                <div class="col col-6 d-grid gap-2">
                  <button type="submit" class="btn btn-primary btn-lg" name="submit_reg_form" id="submit_reg_form">
                    <span class="reg_btn_text" id="reg_btn_text" style="
                          top: 230px;
                          left: 215px;
                          right: 60px;
                          font-size: xx-large;
                        ">Register</span>
                    <span>
                      <div class="lds-facebook loader_reg" style="width: 72px; height: 59px; opacity: 0%">
                        <div></div>
                        <div></div>
                        <div></div>
                      </div>
                    </span>
                  </button>
                </div>
              </div>
            </div>

            <!-------FORM 5 END---------->
          </form>
        </div>
      </div>
    </div>
  </div>

  <!------------jQuery START----------->

  <script src="resources/JS/styling.js"></script>
  <script src="resources/JS/submision.js"></script>
  <script src="resources/JS/validation.js"></script>

  <script>

  </script>
  <!------------jQuery END------------->
</body>

</html>