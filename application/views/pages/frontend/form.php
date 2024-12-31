<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
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
                <form action="<?= $simpan_url ?>" method='POST' enctype="multipart/form-data" id=form_registrasi>
                    <div class="fv-row mb-5">
                        <label class="required form-label" for="kecamatan">Sidang Keliling (Kecamatan)</label>
                        <div data-kt-buttons="true" class="row">
                            <div class="col-md-6">
                                <label
                                    class="btn btn-outline btn-outline-dashed btn-active-light-info d-flex flex-stack text-start p-6 mb-5">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                            <input class="form-check-input" type="radio" name="kecamatan" value="640903" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                Babulu
                                            </h2>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label
                                    class="btn btn-outline btn-outline-dashed btn-active-light-info d-flex flex-stack text-start p-6 mb-5 ">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                            <input class="form-check-input" type="radio" name="kecamatan" value="640904" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                Sepaku
                                            </h2>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Alamat</label>
                        <select class="form-select inputan" data-control="select2" data-dropdown-parent="#kt_modal_create_app"
                            data-placeholder="Pilih Kelurahan / Desa" data-allow-clear="true" name="registrasi_alamat">
                        </select>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Jenis Perkara</label>
                        <select class="form-select inputan" data-control="select2" data-dropdown-parent="#kt_modal_create_app"
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
                            placeholder="Identitas Pendaftar (Nomor KTP)" aria-describedby="Identitas Pendaftar (Nomor KTP)" value="">
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Nama</label>
                        <input type="text" class="form-control inputan" name="registrasi_nama" placeholder="Nama"
                            aria-describedby="Nama" value="">
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control inputan" name="registrasi_tgl_lahir" placeholder="Tanggal Lahir"
                            aria-describedby="Tanggal Lahir" value="" readonly>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required form-label">Pekerjaan</label>
                        <input type="text" class="form-control inputan" name="registrasi_pekerjaan" placeholder="Pekerjaan"
                            aria-describedby="Pekerjaan" value="">
                    </div>
                    <div class="fv-row mb-5">
                        <label class="required d-block fw-semibold fs-6 mb-5">Upload Swafoto (Upload KTP beserta
                            pendaftar)</label>
                        <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true"
                            style="background-image: url('assets/media/svg/avatars/blank.svg')">
                            <div class="image-input-wrapper w-125px h-125px"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ganti Foto">
                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                <input type="file" name="registrasi_file" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="registrasi_file_remove" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Hapus Foto">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                        </div>
                        <div class="form-text">File yang diperbolehkan: png, jpg, jpeg.</div>
                    </div>
                </form>
            </div>
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
    </div>
</div>