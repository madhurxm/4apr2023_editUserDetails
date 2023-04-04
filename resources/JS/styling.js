jQuery(document).ready(function () {
  //     jQuery("a").click(function(){
  //     for(var i = 1; i <= 3; i++){
  jQuery("#next-1, #prev-3").click(function () {
    //     var j =i+1;
    // jQuery("#inside-form-1")
    //   .removeClass("inside-form-1")
    //   .addClass("inside-form-100-1");
    // jQuery("#inside-form-2")
    //   .removeClass("inside-form-2")
    //   .addClass("inside-form-100-2");
    // jQuery("#next-1").css({ "position" ,"absolute", opacity: "0" });
    // jQuery("#next-2").css({ position: "relative"; opacity: "100" });
    jQuery("#inside-form-1").css("position", "absolute");
    jQuery("#inside-form-1").css("opacity","0");
    jQuery("#inside-form-2").css("position", "relative");
    jQuery("#inside-form-2").css("opacity","100");
    jQuery("#inside-form-3").css("position", "relative");
    jQuery("#inside-form-3").css("opacity", "0");
    jQuery("#inside-form-4").css("position", "absolute");
    jQuery("#inside-form-4").css("opacity", "0");
    jQuery("#inside-form-5").css("position", "absolute");
    jQuery("#inside-form-5").css("opacity", "0");
  });
  // }
  // });
  jQuery("#next-2, #prev-4").click(function () {
    jQuery("#inside-form-1").css("position", "absolute");
    jQuery("#inside-form-1").css("opacity", "0");
    jQuery("#inside-form-2").css("position", "absolute");
    jQuery("#inside-form-2").css("opacity", "0");
    jQuery("#inside-form-3").css("position", "relative");
    jQuery("#inside-form-3").css("opacity", "100");
    jQuery("#inside-form-4").css("position", "absolute");
    jQuery("#inside-form-4").css("opacity", "0");
    jQuery("#inside-form-5").css("position", "absolute");
    jQuery("#inside-form-5").css("opacity", "0");
  });

  jQuery("#next-3, #prev-5").click(function () {
    jQuery("#inside-form-1").css("position", "absolute");
    jQuery("#inside-form-1").css("opacity", "0");
    jQuery("#inside-form-2").css("position", "absolute");
    jQuery("#inside-form-2").css("opacity", "0");
    jQuery("#inside-form-3").css("position", "absolute");
    jQuery("#inside-form-3").css("opacity", "0");
    jQuery("#inside-form-4").css("position", "relative");
    jQuery("#inside-form-4").css("opacity", "100");
    jQuery("#inside-form-5").css("position", "absolute");
    jQuery("#inside-form-5").css("opacity", "0");
  });

  jQuery("#next-4").click(function () {
    jQuery("#inside-form-1").css("position", "absolute");
    jQuery("#inside-form-1").css("opacity", "0");
    jQuery("#inside-form-2").css("position", "absolute");
    jQuery("#inside-form-2").css("opacity", "0");
    jQuery("#inside-form-3").css("position", "absolute");
    jQuery("#inside-form-3").css("opacity", "0");
    jQuery("#inside-form-4").css("position", "absolute");
    jQuery("#inside-form-4").css("opacity", "0");
    jQuery("#inside-form-5").css("position", "relative");
    jQuery("#inside-form-5").css("opacity", "100");
  });

  jQuery("#prev-2").click(function () {
    jQuery("#inside-form-1").css("position", "relative");
    jQuery("#inside-form-1").css("opacity", "100");
    jQuery("#inside-form-2").css("position", "relative");
    jQuery("#inside-form-2").css("opacity", "0");
    jQuery("#inside-form-3").css("position", "relative");
    jQuery("#inside-form-3").css("opacity", "0");
    jQuery("#inside-form-5").css("position", "absolute");
    jQuery("#inside-form-5").css("opacity", "0");
  });

  
});
