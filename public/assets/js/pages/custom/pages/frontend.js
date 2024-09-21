"use strict";
var KTCreateApp = (function () {
  const init_widget = () => {
    $("[name='registrasi_tgl_lahir']").flatpickr();
  };
  const form_validation = () => {
    const form = document.getElementById("form_registrasi");
    var validator = FormValidation.formValidation(form, {
      fields: {
        registrasi_identitas: {
          validators: {
            notEmpty: {
              message: "Silakan Diisi!!"
            },
            integer: {
              message: "Nomor Tidak Valid. Mohon diisi dengan angka!!"
            },
            stringLength: {
              min: 16,
              max: 16,
              message: "Tidak boleh lebih dan kurang dari 16 karakter!!"
            }
          }
        },
        registrasi_nama: {
          validators: {
            notEmpty: {
              message: "Silakan Diisi!!"
            }
          }
        },
        registrasi_alamat: {
          validators: {
            notEmpty: {
              message: "Silakan Dipilih!!"
            }
          }
        },
        registrasi_tgl_lahir: {
          validators: {
            date: {
              format: "YYYY-MM-DD",
              message: "Format Tanggal tidak sesuai"
            },
            notEmpty: {
              message: "Silakan Diisi!!"
            }
          }
        },
        registrasi_pekerjaan: {
          validators: {
            notEmpty: {
              message: "Silakan Diisi!!"
            }
          }
        },
        registrasi_jenis_perkara: {
          validators: {
            notEmpty: {
              message: "Silakan Diisi!!"
            }
          }
        }
      },

      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap: new FormValidation.plugins.Bootstrap5({
          rowSelector: ".fv-row",
          eleInvalidClass: "",
          eleValidClass: ""
        })
      }
    });
    $(form.querySelector('[name="registrasi_alamat"]')).on("change", function () {
      validator.revalidateField("registrasi_alamat");
    });
    // Submit button handler
    const submitButton = document.getElementById("btn_register");
    submitButton.addEventListener("click", function (e) {
      // Prevent default button action
      e.preventDefault();
      // Validate form before submit
      if (validator) {
        validator.validate().then(function (status) {
          if (status == "Valid") {
            submitButton.setAttribute("data-kt-indicator", "on");

            submitButton.disabled = true;
            setTimeout(function () {
              submitButton.removeAttribute("data-kt-indicator");

              submitButton.disabled = false;

              Swal.fire({
                text: "Form has been successfully submitted!",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              });
            }, 2000);
          }
        });
      }
    });
  };
  return {
    init: function () {
      form_validation();
      init_widget();
    }
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTCreateApp.init();
});
