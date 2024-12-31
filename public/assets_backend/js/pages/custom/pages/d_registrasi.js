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
          } catch (err) {
            $("#response").fadeIn("slow").html(data);
          }

          button.prop("disabled", false);
          button.removeClass("disabled");
          button.text(button_text);
        },
      }).done(function (msg) {
        handleAction();
        KTApp.initTooltips();
      });
    };
    $("#form_submit").validate({
      rules: {
        jenis_pendaftaran: {
          required: true,
        },
      },
      messages: {
        jenis_pendaftaran: {
          required: "Silakan Pilih !!",
        },
      },
      submitHandler: function (e) {
        handleSubmit(e);
        return false;
      },
    });
  };
  let handleAction = () => {
    $("#btn_view").on("click", function (e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: this.href,
        success: function (data) {
          const eR = $.parseJSON(data);
          $("#iframe-content").html(eR.response);
        },
      });
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
