"use strict";

// Class Definition
var KTLoginGeneral = (function () {
  var login = $("#kt_login");

  var showErrorMsg = function (form, type, msg) {
    var alert = $(
      '<div class="alert alert-' +
        type +
        ' alert-dismissible" role="alert">\
			<div class="alert-text">' +
        msg +
        '</div>\
			<div class="alert-close">\
                <i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i>\
            </div>\
		</div>'
    );

    form.find(".alert").remove();
    alert.prependTo(form);
    //alert.animateClass('fadeIn animated');
    KTUtil.animateClass(alert[0], "fadeIn animated");
    alert.find("span").html(msg);
  };

  var handleSignInFormSubmit = function () {
    $("#kt_sign_in_submit").click(function (e) {
      e.preventDefault();
      var btn = $(this)[0];
      var form = $(this).closest("form")[0];
      const validator = FormValidation.formValidation(form, {
        fields: {
          username: {
            validators: {
              notEmpty: {
                message: "Silakan Username Diisi!!",
              },
            },
          },
          password: {
            validators: {
              notEmpty: {
                message: "Silakan Password Diisi!!",
              },
            },
          },
        },

        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: ".fv-row",
            eleInvalidClass: "",
            eleValidClass: "",
          }),
        },
      });
      validator.validate().then(function (status) {
        if (status == "Valid") {
          btn.setAttribute("data-kt-indicator", "on");
          btn.disabled = true;
          $.ajax({
            type: form.method,
            url: form.action,
            data: $(form).serialize(),
            success: (data) => {
              btn.removeAttribute("data-kt-indicator");
              btn.disabled = false;
              const eR = JSON.parse(data);
              Swal.fire({
                text: eR.message,
                icon: eR.status,
                buttonsStyling: false,
                confirmButtonText: "Ok, Lanjutkan!!",
                customClass: {
                  confirmButton:
                    eR.status !== "error"
                      ? "btn btn-primary"
                      : "btn btn-danger",
                },
              }).then(function () {
                if (eR.status !== "error") {
                  window.location = "/home";
                }
              });
            },
          });
        }
      });
    });
  };
  // Public Functions
  return {
    // public functions
    init: function () {
      handleSignInFormSubmit();
    },
  };
})();

// Class Initialization
jQuery(document).ready(function () {
  KTLoginGeneral.init();
});
