jQuery(document).ready(function () {
  //======= REGISTERATION PAGE===========//

  //====to LOGIN Page Button====//

  jQuery("#to_login").click(function (e) {
    e.preventDefault();
    jQuery("#to_login_loader").addClass("spinner-grow");

    setTimeout(function () {
      //   var formdata = new FormData(this);
      //   alert("bse");
      //   jQuery.ajax({
      //     url: "../../app/db_insertion.php",
      //     type: "POST",
      //     data: formdata,
      //     processData: false,
      //     contentType: false,
      //     cache: false,
      //     success: function (data) {
      //       alert(data);
      //     },
      //   });

      $(location).attr(
        "href",
        "http://localhost/MM-Projects/APR'23/4Apr_-_Updating_details_of_user/app/Webpages/login.php"
      );
    }, 3000);
  });

  //==== Register Button====//

  jQuery("#reg_form").submit(function (e) {
    e.preventDefault();

    jQuery(".reg_btn_text").css("opacity", "0");
    jQuery(".loader_reg").css("opacity", "100");

    // alert($("#resume")[0].files.type);
    // alert($("#resume").val());
    if (jQuery("#resume").val() == "") {
      jQuery("#alert_box").text("Upload resume");
      jQuery(".alert_div").css("opacity", "100");
      setTimeout(function () {
        jQuery(".alert_div").css("opacity", "0");
      }, 5000);
      jQuery(".reg_btn_text").css("opacity", "100");
      jQuery(".loader_reg").css("opacity", "00");
      return;
    }

    if (jQuery("#pfp").val() == "") {
      jQuery("#alert_box").text("Upload Profile Picture");
      jQuery(".alert_div").css("opacity", "100");
      setTimeout(function () {
        jQuery(".alert_div").css("opacity", "0");
      }, 5000);
      jQuery(".reg_btn_text").css("opacity", "100");
      jQuery(".loader_reg").css("opacity", "00");
      return;
    }

    //   var resume_validExtensions = ["pdf, doc"];
    //   if ($.inArray($("#resume").val().split('.').pop().toLowerCase(), resume_validExtensions) == -1) {
    //     alert("Only formats are allowed : "+resume_validExtensions.join(', '));
    //     jQuery(".reg_btn_text").css("opacity", "100");
    //     jQuery(".loader_reg").css("opacity", "00");
    //     return;
    // }
    // var resume_file = $("#resume").val().split(".").pop();
    // if (resume_validExtensions.indexOf(resume_file) == -1) {
    //   alert(
    //     "Please upload resume file. Only formats are allowed : " +
    //       resume_validExtensions.join(", ")
    //   );

    // }
    //   var pfp_validExtensions = ["jpg", "jpeg", "gif", "png"];
    //   if ($.inArray($("#pfp").val().split('.').pop().toLowerCase(), pfp_validExtensions) == -1) {
    //     alert("Only formats are allowed : "+pfp_validExtensions.join(', '));
    //     jQuery(".reg_btn_text").css("opacity", "100");
    //     jQuery(".loader_reg").css("opacity", "00");
    //     return;
    // }
    // var pfp_file = $("#pfp").val().split(".").pop();
    // if (pfp_validExtensions.indexOf(pfp_file) == -1) {
    //   alert(
    //     "Please upload Profile picture. Only formats are allowed : " +
    //       pfp_validExtensions.join(", ")
    //   );
    //   jQuery(".reg_btn_text").css("opacity", "100");
    //   jQuery(".loader_reg").css("opacity", "00");
    //   return;
    // }

    var formData = new FormData($(this)[0]);

    var i = 18;

    for (var [key, value] of formData) {
      if (value == "") {
        jQuery("#alert_box").text(key + " is empty. Please fill it");
        jQuery(".alert_div").css("opacity", "100");
        setTimeout(function () {
          jQuery(".alert_div").css("opacity", "0");
        }, 5000);
        jQuery(".reg_btn_text").css("opacity", "100");
        jQuery(".loader_reg").css("opacity", "00");
        i--;
        return;
      } else if (value == "checked_null") {
        jQuery("#alert_box").text("Please select skills");
        jQuery(".alert_div").css("opacity", "100");
        setTimeout(function () {
          jQuery(".alert_div").css("opacity", "0");
        }, 5000);
        jQuery(".reg_btn_text").css("opacity", "100");
        jQuery(".loader_reg").css("opacity", "00");
        return;
        // } else if (
        //   (key == "resume" || key == "pfp") &&
        //   $("#resume, #pfp")[0].files.type === "undefined"
        // ) {
        //   alert(" Please select file");
        //   jQuery(".reg_btn_text").css("opacity", "100");
        //   jQuery(".loader_reg").css("opacity", "00");
        //   return;
        // } else if (
        //   (key == "pfp") &&
        //   (typeof $("#pfp")[1].files.size == "undefined")
        // ) {
        //   alert(" Please select file");
        //   jQuery(".reg_btn_text").css("opacity", "100");
        //   jQuery(".loader_reg").css("opacity", "00");
        //   return;
      }

      // alert(key + " is empty. Please fill it");
      // jQuery(".reg_btn_text").css("opacity", "100");
      // jQuery(".loader_reg").css("opacity", "00");
      // i--;
      // return;

      // } else if (key == "skills[]") {
      //   j++;
      // } else if (key == "passport") {
      //   k++;
      // } else if (
      //   key != "skills[]" &&
      //   key != "passport" &&
      //   key != "pfp" &&
      //   key != "resume" &&
      //   value != ""
      // ) {
      //   continue;
      // } else {
      //   alert("Resume fill it");
      //   break;
    }

    // if (i == 14 && j >= 1 && k == 1) {

    // if(jQuery("checkbox").val() == "checked_null"){
    //   alert("Please select Skills");
    //   break;
    // }
    // else{

    if (i == 18) {
      setTimeout(function () {
        jQuery.ajax({
          url: "app/Functions/db_insertion.php",
          type: "POST",
          data: formData,
          async: false,
          cache: false,
          contentType: false,
          enctype: "multipart/form-data",
          processData: false,
          success: function (data) {
            if (data == "Registration Successful") {
              jQuery("#alert_box").text(data);
              jQuery(".alert_div").css("opacity", "100");
              setTimeout(function () {
                jQuery(".alert_div").css("opacity", "0");
              }, 5000);
              setTimeout(function () {
                $(location).attr("href", "app/Webpages/login.php");
              }, 7000);
            } else {
              jQuery("#alert_box").text(data);
              jQuery(".alert_div").css("opacity", "100");
              setTimeout(function () {
                jQuery(".alert_div").css("opacity", "0");
              }, 5000);
            }
          },
        });
        // $(location).attr("href", "app/Webpages/login.php");
      }, 8000);
    }
    // } else {
    //   break;
    // }

    // alert("4");

    // setTimeout(function () {
    //   jQuery.ajax({
    //     url: "app/Functions/db_insertion.php",
    //     type: "POST",
    //     data: formData,
    //     async: false,
    //     cache: false,
    //     contentType: false,
    //     enctype: "multipart/form-data",
    //     processData: false,
    //     success: function (data) {
    //       alert(data);
    //     },
    //   });
    //   // $(location).attr("href", "app/Webpages/login.php");
    // }, 500);
    // return false;
  });

  //==============LOGIN PAGE===============//

  //====to Registration form Button====//

  jQuery("#to_reg").click(function (e) {
    e.preventDefault();

    jQuery("#to_reg_page_btn_text").css("opacity", "0");
    jQuery(".loader_to_reg").css("opacity", "100");

    setTimeout(function () {
      //   var formdata = new FormData(this);
      //   alert("bse");
      //   jQuery.ajax({
      //     url: "../../app/db_insertion.php",
      //     type: "POST",
      //     data: formdata,
      //     processData: false,
      //     contentType: false,
      //     cache: false,
      //     success: function (data) {
      //       alert(data);
      //     },
      //   });

      $(location).attr("href", "../../index.php");
    }, 3000);
  });

  //====LOGIN Button====//

  jQuery("#login_form").submit(function (e) {
    e.preventDefault();
    jQuery(".login_btn_text").css("opacity", "0");
    jQuery(".loader_login").css("opacity", "100");

    setTimeout(function () {
      jQuery.ajax({
        url: "../../app/Verification/authentication.php",
        type: "POST",
        data: $("#login_form").serialize(),
        success: function (data) {
          jQuery(".alert_box").text(data);
          jQuery(".alert_div").css("opacity", "100");
          setTimeout(function () {
            jQuery(".alert_div").css("opacity", "0");
          }, 5000);
          setTimeout(function () {
            $(location).attr(
              "href",
              "http://localhost/MM-Projects/APR'23/4Apr_-_Updating_details_of_user/app/Webpages/profile_page.php"
            );
          }, 6000);
        },
      });
    }, 6000);
  });
});
