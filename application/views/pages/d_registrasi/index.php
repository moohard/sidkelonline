
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
                                        <?=strtoupper($page_judul)?>
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-actions">
                                        <a href="<?=$create_url?>" class="btn btn-outline-primary">
                                            <span>
                                                <i class="flaticon2-plus"></i>
                                                <span>Create</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="kt-portlet__body">
            
                                <!--begin::Section-->
                                <div class="kt-section">
                                    <div class="kt-section__content">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Alamat</th>
<th>Nama Pendaftar</th>
<th>Nomor Identitas (KTP)</th>
<th>Umur</th>
<th>Pekerjaan</th>
<th>Upload</th>
<th>Jenis Perkara yang ingin didaftarkan</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                if($datas!=false)
                                                {
                                                    $i = 1;
                                                    foreach($datas as $row)
                                                    {
                                                        $key = $this->encryptions->encode($row->registrasi_id,$this->config->item('encryption_key'));
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?=$i++?></th>
                                                        <td><?=$row->registrasi_alamat?></td><td><?=$row->registrasi_nama?></td><td><?=$row->registrasi_identitas?></td><td><?=$row->registrasi_umur?></td><td><?=$row->registrasi_pekerjaan?></td><td><?=$row->registrasi_file?></td><td><?=$row->registrasi_jenis_perkara?></td>
                                                        <td>
                                                        <a href="<?=$update_url.$key?>" title="Update" class="btn btn-sm btn-outline-primary btn-elevate btn-circle btn-icon">
                                                            <span>
                                                                <i class="fa fa-pencil-alt"></i>
                                                            </span>
                                                        </a>
                                                        <a href="<?=$delete_url.$key?>" title="Delete" id='ts_remove_row<?= $i; ?>' class="ts_remove_row btn btn-sm btn-outline-danger btn-elevate btn-circle btn-icon">
                                                            <span>
                                                                <i class="fa fa-trash-alt"></i>
                                                            </span>
                                                        </a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
            
                                <!--end::Section-->
                            </div>
                        </div>
            
                        <!--end::Portlet-->
                    </div>
                </div>
            </div>
            <!--End::Row-->
            