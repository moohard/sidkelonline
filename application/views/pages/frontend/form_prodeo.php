<div class="modal fade" id="kt_modal_form_prodeo" tabindex="-1" aria-hidden="true">
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
                <form action="<?= $simpan_url ?>" method='POST' enctype="multipart/form-data" id=form_registrasi>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Sidang Keliling</label>
                        <select class="form-select inputan" data-control="select2" data-dropdown-parent="#kt_modal_form_prodeo"
                            data-placeholder="Pilih Ruang Sidang" data-allow-clear="true" name="registrasi_rsidang">
                            <option value=""></option>
                            <?php
                            foreach ($r_villages as $row):
                                echo '<option value="' . $row->villageId . '">' . $row->villageNama . '</option>';
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Jenis Perkara</label>
                        <select class="form-select inputan" data-control="select2" data-dropdown-parent="#kt_modal_form_prodeo"
                            data-placeholder="Pilih Jenis Perkara" data-allow-clear="true"
                            name="registrasi_jenis_perkara">
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
                            placeholder="Identitas Pendaftar (Nomor KTP)"
                            aria-describedby="Identitas Pendaftar (Nomor KTP)" value="1234561234561234">
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
                    <div class="fv-row mb-5">
                        <label class="required form-label">Pekerjaan</label>
                        <input type="text" class="form-control inputan" name="registrasi_pekerjaan" placeholder="Pekerjaan"
                            aria-describedby="Pekerjaan" value="PNS">
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="required d-block fw-semibold fs-6 mb-5">Upload Surat Keterangan Tidak Mampu (SKTM beserta
                            pendaftar)</label>
                        <!--end::Label-->

                        <!--begin::Image input-->
                        <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true"
                            style="background-image: url('assets/media/svg/avatars/blank.svg')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px"></div>
                            <!--end::Preview existing avatar-->

                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ganti Foto">
                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                        class="path2"></span></i>

                                <!--begin::Inputs-->
                                <input type="file" name="registrasi_file" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="registrasi_file_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Hapus Foto">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->

                        <!--begin::Hint-->
                        <div class="form-text">File yang diperbolehkan: png, jpg, jpeg.</div>
                        <!--end::Hint-->
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