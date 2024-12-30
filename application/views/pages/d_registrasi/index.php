<?php $this->load->view('layouts/subheader'); ?>
<div class="kt-portlet col-md-10 offset-md-1">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        Pendataan Pendaftaran Sidang Keliling dan Prodeo
      </h3>
    </div>
  </div>

  <form class="kt-form kt-form--fit kt-form--label-right" action="<?= $response_url ?>" method="POST" id="form_submit">
    <div class="kt-portlet__body">
      <div class=" form-group">
        <div class="col-md-8 offset-md-2">
          <label>Jenis Pendaftaran</label>
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