jQuery(document).ready(function () {
  //====== NAME =====//
  // jQuery("#name").focusout(function () {
  //   if (
  //     !(/^[A-Za-z]{3,30}$/).test(jQuery(this).val()) ^
  //     (jQuery(this).val() == "")
  //   ) {
  //     alert("Enter only Alphabets");
  //     // jQuery(".name_validation").css("opacity","100%");
  //     // jQuery(".name_validation").css("position","relative");
  //     jQuery(this).val("");
  //     jQuery(this).focus();
  //     return false;
  //   }
  // });



  //====== EMP ID =====//
  jQuery("#emp_id").focusout(function () {
    var x = jQuery(this).val();
    // if (
    //   !/[A-Z]{3}[0-9]{2}$/.test(jQuery(this).val()) ^
    //   (jQuery(this).val() == "")
    // ) {
    //   alert("Enter Employee ID in XXX00 format");
    //   jQuery(this).val("");
    //   jQuery(this).focus();
    //   return false;
    // }
    jQuery.ajax({
      url: "app/Verification/validation.php",
      type: "POST",
      data: { emp_id: x },
      success: function (data) {
        if (data === "1") {
          data = "";
          return false;
        } else {
          
          jQuery("#alert_box").text(data);
          jQuery(".alert_div").css("opacity","100");
          setTimeout(function(){
            jQuery(".alert_div").css("opacity","0");
          }, 5000);

        }
      },
    });
    return false;
  });

  //====== Mobile =====//
  jQuery("#mobile").focusout(function () {
    if (!/[0-9]$/.test(jQuery(this).val()) ^ (jQuery(this).val() == "")) {
      
      jQuery("#alert_box").text("Enter only Numbers");
          jQuery(".alert_div").css("opacity","100");
          setTimeout(function(){
            jQuery(".alert_div").css("opacity","0");
          }, 5000);
      // jQuery(".name_validation").css("opacity","100%");
      // jQuery(".name_validation").css("position","relative");
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
  });

  //====== email =====//
  jQuery("#email").focusout(function () {
    if (!/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test(jQuery(this).val()) ^ (jQuery(this).val() == "")) {
      
      jQuery("#alert_box").text("Enter proper Email");
          jQuery(".alert_div").css("opacity","100");
          setTimeout(function(){
            jQuery(".alert_div").css("opacity","0");
          }, 5000);
      // jQuery(".name_validation").css("opacity","100%");
      // jQuery(".name_validation").css("position","relative");
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
  });

  // ========Skills Checkbox =========== //
  jQuery(".reg_cb").change(function () {
    if(jQuery(".reg_cb").is(':checked'))
    {
      jQuery(".hidden_cb").prop('checked', false);
    }
    else
    {
      jQuery(".hidden_cb").prop('checked', true);
    }
  });




  //====== REG USER NAME =====//
  jQuery("#reg_username").focusout(function () {
    var x = jQuery(this).val();
    // if (
    //   !/^[A-Z0-9a-z]{1,8}$/.test(jQuery(this).val()) ^
    //   (jQuery(this).val() == "")
    // ) {
    //   alert("Username can have eight alphabets and numbers only");
    //   jQuery(this).val("");
    //   jQuery(this).focus();
    //   return false;
    // }

    jQuery.ajax({
      url: "app/Verification/validation.php",
      type: "POST",
      data: { reg_username: x },
      success: function (data) {
        jQuery("#alert_box").text(data);
          jQuery(".alert_div").css("opacity","100");
          setTimeout(function(){
            jQuery(".alert_div").css("opacity","0");
          }, 5000);
      },
    });

    return false;
  });

  //====== REG Password =====//
  jQuery("#reg_pass").focusout(function () {
    if (
      !/[0-9A-Za-z@%]{1,8}$/.test(jQuery(this).val()) ^
      (jQuery(this).val() == "")
    ) {
      
      jQuery("#alert_box").text("Only Alphabets, Numbers and % @ are allowed.");
          jQuery(".alert_div").css("opacity","100");
          setTimeout(function(){
            jQuery(".alert_div").css("opacity","0");
          }, 5000);
      // jQuery(".name_validation").css("opacity","100%");
      // jQuery(".name_validation").css("position","relative");
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
  });

  //====== LOGIN USER NAME =====//
  jQuery("#login_username").focusout(function () {
    // var x = jQuery(this).val();
    if (
      !/^[A-Z0-9a-z]{1,8}$/.test(jQuery(this).val()) ^
      (jQuery(this).val() == "")
    ) {
      
      jQuery("#alert_box").text("Please enter valid username");
          jQuery(".alert_div").css("opacity","100");
          setTimeout(function(){
            jQuery(".alert_div").css("opacity","0");
          }, 5000);
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
    // jQuery.ajax({
    //   url: "app/Verification/authentication.php",
    //   type: "POST",
    //   data: { login_username: "x" },
    //   success: function (data) {
    //     if (data != "") {
    //       alert(data);
    //     }
    //   },
    // });
  });

  //====== LOGIN Password =====//
  jQuery("#login_pass").focusout(function () {
    if (
      !/[0-9A-Za-z]{1,8}$/.test(jQuery(this).val()) ^
      (jQuery(this).val() == "")
    ) {
      
      jQuery("#alert_box").text("Please enter valid password");
          jQuery(".alert_div").css("opacity","100");
          setTimeout(function(){
            jQuery(".alert_div").css("opacity","0");
          }, 5000);
      // jQuery(".name_validation").css("opacity","100%");
      // jQuery(".name_validation").css("position","relative");
      jQuery(this).val("");
      jQuery(this).focus();
      return false;
    }
  });
});
