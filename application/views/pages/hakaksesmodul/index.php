<?php $this->load->view('layouts/subheader'); ?>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= strtoupper($page_judul) ?>
                        </h3>
                    </div>
                </div>

                <form class="kt-form" action="<?= $show_url ?>" method="post" id="form_show">
                    <div class="kt-portlet__body">
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control m-select2" name="hakakses">
                                <option value=""></option>
                                <?php
                                foreach ($s_user_group as $row):
                                    echo '<option value="' . $row->sgroupNama . '">' . $row->sgroupNama . ' - ' . $row->sgroupKeterangan . '</option>';
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>