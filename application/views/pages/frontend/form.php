<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Registrasi</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <form action="<?= $simpan_url ?>" type='POST' enctype="multipart/form-data" id=form_registrasi>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Alamat</label>
                        <select class="form-select" data-control="select2" data-dropdown-parent="#kt_modal_create_app"
                            data-placeholder="Pilih Kelurahan / Desa" data-allow-clear="true" name="registrasi_alamat">
                            <option value=""></option>
                            <?php
                            foreach ($r_villages as $row):
                                echo '<option value="' . $row->villageId . '">' . $row->villageNama . '</option>';
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Identitas Pendaftar (Nomor KTP)</label>
                        <input type="text" class="form-control" name="registrasi_identitas"
                            placeholder="Identitas Pendaftar (Nomor KTP)"
                            aria-describedby="Identitas Pendaftar (Nomor KTP)" value="">
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Nama</label>
                        <input type="text" class="form-control" name="registrasi_nama" placeholder="Nama"
                            aria-describedby="Nama" value="">
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="registrasi_tgl_lahir" placeholder="Tanggal Lahir"
                            aria-describedby="Tanggal Lahir" value="" readonly>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="registrasi_pekerjaan" placeholder="Pekerjaan"
                            aria-describedby="Pekerjaan" value="">
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Jenis Perkara</label>
                        <input type="text" class="form-control" name="registrasi_jenis_perkara"
                            placeholder="Jenis Perkara" aria-describedby="Jenis Perkara" value="">
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Upload Foto Identitas</label>
                        <input type="file" class="form-control" name="registrasi_file"
                            placeholder="Upload Foto Identitas" aria-describedby="Upload Foto Identitas" value="">
                    </div>
                </form>
            </div>
            <!--end::Modal body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-light hover-elevate-down" data-bs-dismiss="modal">Close</button>

                <button type="button" class="btn btn-primary hover-elevate-down" id="btn_register">
                    <span class="indicator-label">
                        Register
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>