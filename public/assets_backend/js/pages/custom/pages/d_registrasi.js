"use strict";

// Class Definition
var KTLoginGeneral = (function () {
  let handleWidgets = () => {
    $(".select2").select2({
      placeholder: "Silakan Pilih",
      allowClear: true,
    });
  };
  let formValidationIndex = () => {
    let handleSubmit = (form) => {
      $("#response").html("");
      var button = $("#btn_submit");
      var button_text = button.text();
      button.prop("disabled", true);
      button.addClass("disabled");
      button.text("Sedang Memproses...");
      $.ajax({
        type: $(form).attr("method"),
        url: $(form).attr("action"),
        data: $(form).serialize(),
        success: function (data) {
          try {
            var res = $.parseJSON(data);
            $("#response").fadeIn("slow").html(res.response);
            KTApp.initTooltips();
          } catch (err) {
            $("#response").fadeIn("slow").html(data);
          }

          button.prop("disabled", false);
          button.removeClass("disabled");
          button.text(button_text);
        },
      });
    };
    $("#form_submit").validate({
      rules: {},
      submitHandler: function (e) {
        handleSubmit(e);
        return false;
      },
    });
  };
  return {
    // public functions
    init: function () {
      formValidationIndex();
      handleWidgets();
    },
  };
})();

// Class Initialization
jQuery(document).ready(function () {
  KTLoginGeneral.init();
});
