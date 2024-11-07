<!-- BEGIN: Subheader -->
<?php $this->load->view('layouts/subheader'); ?>
<!-- END: Subheader -->

<!--Begin::Row-->
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="response"></div>
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= strtoupper($page_judul) ?>
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form class="kt-form" action="<?= $save_url ?>" method="post" id="form_form">
                    <div class="kt-portlet__body">
                        <input type="hidden" name="registrasi_idOld" value="<?= $datas != false ? $datas->registrasi_id : '' ?>">

                        <div class="form-group">
                            <label>Alamat</label>
                            <select class="form-control m-select2" name="registrasi_alamat">
                                <option value=""></option>
                                <?php
                                foreach ($r_villages as $row):
                                    echo '<option value="' . $row->villageId . '" ' . ($datas != false ? $row->villageId == $datas->registrasi_alamat ? 'selected' : '' : '') . '>' . $row->villageId . '</option>';
                                endforeach;
                                ?>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>Identitas Pendaftar (Nomor KTP)</label>
                            <input type="text" class="form-control" name="registrasi_identitas" placeholder="Identitas Pendaftar (Nomor KTP)" aria-describedby="Identitas Pendaftar (Nomor KTP)" value="<?= $datas != false ? $datas->registrasi_identitas : '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="registrasi_nama" placeholder="Nama" aria-describedby="Nama" value="<?= $datas != false ? $datas->registrasi_nama : '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Umur</label>
                            <input type="text" class="form-control" name="registrasi_tgl_lahir" placeholder="Umur" aria-describedby="Umur" value="<?= $datas != false ? $datas->registrasi_tgl_lahir : '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="registrasi_pekerjaan" placeholder="Pekerjaan" aria-describedby="Pekerjaan" value="<?= $datas != false ? $datas->registrasi_pekerjaan : '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Jenis Perkara</label>
                            <input type="text" class="form-control" name="registrasi_jenis_perkara" placeholder="Jenis Perkara" aria-describedby="Jenis Perkara" value="<?= $datas != false ? $datas->registrasi_jenis_perkara : '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Upload Foto Identitas</label>
                            <input type="text" class="form-control" name="registrasi_file" placeholder="Upload Foto Identitas" aria-describedby="Upload Foto Identitas" value="<?= $datas != false ? $datas->registrasi_file : '' ?>">
                        </div>

                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->
        </div>
    </div>
</div>
<!--End::Row-->