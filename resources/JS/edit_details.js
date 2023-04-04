jQuery(document).ready(function () {
  jQuery(".actual_data").dblclick(function () {
    var ele_id = jQuery(this).attr("id");
    jQuery(".actual_data").attr("hidden", "true");
    jQuery(".input_field_"+ele_id).removeAttr("hidden");
    jQuery(".input_field_"+ele_id).focus();
    
    

    jQuery(document).click(function () {
      var value = jQuery("#" + ele_id + " + input").val();
      // alert(ele_id);
      // alert(value);
      jQuery.ajax({
        type: "POST",
        url: "../../app/Functions/db_update.php",
        data: {"value" : value, "key": ele_id },
        success: function (data) {
        },
      });
      location.reload(true);
      
    });
  });
});
