<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-----BOOTSTRAP CDN----->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />

    <!-----FONT AWESOME CDN----->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-----EXTERNAL CSS----->
    <link rel="stylesheet" href="../../resources/css/reg_login_page_styling.css" />
    <title>Login Page</title>

    <!-----jQuery CDN---->
    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"
    ></script>

    <!------FONT CDN----->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"
    />
  </head>

  <body>
    <div class="container">

    <!-- ==== ALERT DIV ==== -->
    <div class="row alert_div" style="float:right; opacity:00%; word-wrap: break-word; width:40%">
      <div class="col-6"></div>
      <div class="col-6" id="alert_style_div" style="content-visibility: auto" >
        <p class="alert_box" id="alert_box"></p>
      </div>
    </div>
    <!-- ==== ALERT DIV END ==== -->

      <div class="boxx row" style="position: fixed">
        <div class="col col-md-6 p-0 overflow-hidden opacity-100">
          <img src="../../resources/img/vintage-1721884_960_720.jpg" />
        </div>
        <div class="col col-md-6 p-1" id="form_div">
          <div class="form-heading mb-5">
            <h1>LOGIN form</h1>
          </div>
          
          <!-- ======LOGIN FORM ===== -->

          <div class="form-container" style="position: fixed; width: 29%">
            <form name="login_form" id="login_form" method="POST">
              <!-------LOGIN DETAILS ------>

              <div class="inside-form-1 mx-3" id="inside-form-5">
                <!---USERNAME-->
                <div class="form-floating mb-5 mt-5">
                  <input
                    type="text"
                    id="login_username"
                    name="login_username"
                    class="form-control form-control-lg"
                    placeholder="User Name"
                    required
                    maxlength="8"
                  />
                  <label for="login_username" class="form-label">User Name</label>
                </div>

                <!---Password-->
                <div class="form-floating mb-5 mt-5">
                  <input
                    type="password"
                    id="login_pass"
                    name="login_pass"
                    class="form-control form-control-lg"
                    placeholder="Password"
                    maxlength="8"
                    required
                  />
                  <label for="login_pass" class="form-label">Password</label>
                </div>

                <!----NAV BUTTONS---->
                <div class="row d-flex align-items-center">
                  <!----REGISTER BUTTON-->
                  <div class="col col-6 d-grid gap-2">
                    <a
                          href="../indexx.html"
                          style="
                            color: rgb(255, 255, 255);
                            text-decoration: none;
                          "
                          >
                    <button
                      type="button"
                      class="btn btn-secondary"
                      style="width: 170px"
                      class="to_reg"
                      id="to_reg"
                    >
                      <span
                        class="to_reg_page_btn_text"
                        id="to_reg_page_btn_text"
                        style="
                          top: 230px;
                          left: 215px;
                          right: 60px;
                          font-size: xx-large;
                          margin-inline: 9px;
                        "
                      >
                        Register</span
                      >

                      <span>
                        <div
                          class="lds-facebook loader_to_reg"
                          style="
                            width: 72px;
                            height: 59px;
                            right: 115px;
                            opacity: 0%;
                          "
                        >
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                      </span>
                    </button></a>
                  </div>

                  <!----LOGIN BUTTON-->
                  <div class="col col-6 d-grid gap-2">
                    <button
                      type="submit"
                      class="btn btn-success"
                      name="login_btn"
                      id="login_btn"
                      style="width: 170px"
                    >
                      <span
                        class="login_btn_text"
                        id="login_btn_text"
                        style="
                          top: 230px;
                          left: 215px;
                          right: 60px;
                          font-size: xx-large;
                          margin-inline: 28px;
                        "
                        >Login</span
                      >
                      <span>
                        <div
                          class="lds-facebook loader_login"
                          style="
                            width: 72px;
                            height: 59px;
                            right: 115px;
                            opacity: 0%;
                            right: 115px;
                          "
                        >
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                      </span>
                    </button>
                  </div>
                </div>
              </div>

              <!-------LOGIN DETAILS END---------->
            </form>
          </div>
        </div>
      </div>
    </div>

    <!------------jQuery START----------->

    <script src="../../resources/JS/styling.js"></script>
    <script src="../../resources/JS/submision.js"></script>
    <script src="../../resources/JS/validation.js"></script>

    <!------------jQuery END------------->
  </body>
</html>
