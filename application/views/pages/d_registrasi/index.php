<?php $this->load->view('layouts/subheader'); ?>
<div class="kt-portlet">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        Select2 Examples
      </h3>
    </div>
  </div>

  <form class="kt-form kt-form--fit kt-form--label-right" action="<?= $response_url ?>" method="POST" id="form_submit">
    <div class="kt-portlet__body">
      <div class=" form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Jenis Pendaftaran</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control select2" id="jenis_pendaftaran" name="jenis_pendaftaran">
            <option value=""></option>
            <option value="SIDKEL">Sidang Keliling</option>
            <option value="PRODEO">Prodeo</option>
          </select>
        </div>
      </div>
    </div>
    <div class="kt-portlet__foot">
      <div class="kt-form__actions">
        <div class="row">
          <div class="col-lg-9 ml-lg-auto">
            <button id="btn_submit" type="submit" class="btn btn-brand">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </form>

</div>
<div id="response"></div>