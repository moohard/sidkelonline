<div class="modal fade" id="kt_modal_form_prodeo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered mw-900px">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Registrasi</h2>
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <i class="ki-duotone ki-cross fs-1">
            <span class="path1"></span>
            <span class="path2"></span>
          </i>
        </div>
      </div>
      <div class="modal-body py-lg-10 px-lg-10">
        <form action="<?= $simpan_url ?>" method='POST' enctype="multipart/form-data" id=form_prodeo>
          <input type="hidden" value="PRODEO" name="registrasi_jenis_pendaftaran">
          <div class="fv-row mb-5">
            <label class="required form-label">Jenis Perkara</label>
            <select class="form-select inputan" data-control="select2" data-dropdown-parent="#kt_modal_form_prodeo"
              data-placeholder="Pilih Jenis Perkara" data-allow-clear="true" name="registrasi_jenis_perkara">
              <option value=""></option>
              <?php
                            foreach ($jenis_perkara as $r):
                                echo '<option value="' . $r . '">' . $r . '</option>';
                            endforeach;
                            ?>
            </select>
          </div>
          <div class="fv-row mb-5">
            <label class="required form-label">Identitas Pendaftar (Nomor KTP)</label>
            <input type="text" class="form-control inputan" name="registrasi_identitas"
              placeholder="Identitas Pendaftar (Nomor KTP)" aria-describedby="Identitas Pendaftar (Nomor KTP)"
              value="1234561234561234">
          </div>
          <div class="fv-row mb-5">
            <label class="required form-label">Nama</label>
            <input type="text" class="form-control inputan" name="registrasi_nama" placeholder="Nama"
              aria-describedby="Nama" value="muhar">
          </div>
          <div class="fv-row mb-5">
            <label class="required form-label">Tanggal Lahir</label>
            <input type="text" class="form-control inputan" name="registrasi_tgl_lahir" placeholder="Tanggal Lahir"
              aria-describedby="Tanggal Lahir" value="1991-07-13" readonly>
          </div>
          <div class="fv-row mb-10">
            <label class="required form-label">Pekerjaan</label>
            <input type="text" class="form-control inputan" name="registrasi_pekerjaan" placeholder="Pekerjaan"
              aria-describedby="Pekerjaan" value="PNS">
          </div>
          <div class="fv-row mb-5">
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" name="registrasi_isSidkel" value=""
                id="flexCheckChecked" />
              <label class="form-check-label" for="flexCheckChecked">
                Sidang Keliling
              </label>
            </div>
            <span class="text-primary" style="font-size: 10px;">* Harap Dicentang Apabila mengikuti sidang
              keliling</span>
          </div>
          <div class="fv-row mb-5"><label class="required d-block fw-semibold fs-6 mb-5">Upload Surat Keterangan Tidak
              Mampu (SKTM beserta
              pendaftar)</label><input type="file" class="form-control" name="registrasi_file" accept=".pdf" />
            <input type="hidden" name="registrasi_file_remove" />
            <div class="form-text">File yang diperbolehkan: pdf.</div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light hover-elevate-down" data-bs-dismiss="modal">Close</button><button
          type="button" class="btn btn-primary hover-elevate-down" id="btn_register_prodeo">
          <span class="indicator-label">
            Register
          </span>
          <span class="indicator-progress">
            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
</div>