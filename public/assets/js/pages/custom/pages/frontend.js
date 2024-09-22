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
              message: "Silakan Dipilih!!"
            }
          }
        },
        registrasi_file: {
          validators: {
            notEmpty: {
              message: "Silakan Pilih Foto !!"
            },
            file: {
              extension: "jpg,jpeg,png",
              type: "image/jpeg,image/png",
              message: "File yang dipilih tidak valid!!"
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
    $(form.querySelector('[name="registrasi_alamat"]')).on(
      "change",
      function () {
        validator.revalidateField("registrasi_alamat");
      }
    );
    $(form.querySelector('[name="registrasi_jenis_perkara"]')).on(
      "change",
      function () {
        validator.revalidateField("registrasi_jenis_perkara");
      }
    );
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
            const data = new FormData(form);
            $.ajax({
              type: form.method,
              url: form.action,
              data: data,
              processData: false,
              contentType: false,
              cache: false,
              success: (data) => {
                submitButton.removeAttribute("data-kt-indicator");
                submitButton.disabled = false;
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
                        : "btn btn-danger"
                  }
                }).then(function () {
                  if (eR.status !== "error") {
                    window.location = "/";
                  }
                });
              }
            });
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
