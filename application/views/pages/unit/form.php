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
                        <input type="hidden" name="unitIdOld" value="<?= $datas != false ? $datas->unitId : '' ?>">

                        <div class="form-group">
                            <label>Kode Unit</label>
                            <input type="text" class="form-control" name="unitKode" placeholder="Kode Unit" aria-describedby="Kode Unit" value="<?= $datas != false ? $datas->unitKode : '' ?>">
                        </div>

                        <div class="form-group">
                            <label>Nama Unit</label>
                            <input type="text" class="form-control" name="unitNama" placeholder="Nama Unit" aria-describedby="Nama Unit" value="<?= $datas != false ? $datas->unitNama : '' ?>">
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