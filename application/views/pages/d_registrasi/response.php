<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="response"></div>
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <?= strtoupper($page_judul) ?>
            </h3>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="kt-section">
            <div class="kt-section__content">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th style="text-align: center">No</th>
                      <th style="text-align: center">Identitas Pendaftar (Nomor KTP)</th>
                      <th style="text-align: center">Nama</th>
                      <th style="text-align: center">Umur</th>
                      <th style="text-align: center">Pekerjaan</th>
                      <th style="text-align: center">Jenis Perkara</th>
                      <th style="text-align: center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if ($datas != false) {
                      $i = 1;
                      foreach ($datas as $row) {
                        $key = $this->encryptions->encode($row->registrasi_id, $this->config->item('encryption_key'));
                    ?>
                    <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $row->registrasi_identitas ?></td>
                      <td><?= $row->registrasi_nama ?></td>
                      <td><?= $row->registrasi_tgl_lahir ?></td>
                      <td><?= $row->registrasi_pekerjaan ?></td>
                      <td><?= $row->registrasi_jenis_perkara ?></td>
                      <td>
                        <a href="#" class="kt-tooltip btn btn-outline-hover-danger btn-icon" data-placement="top"
                          title="View" data-toggle="modal" data-target="#kt_modal_4_2">
                          <span class="text-danger">
                            <i class="fa fa-file-pdf"></i>
                          </span>
                        </a>
                        <a href="<?= $validasi_url . $key ?>" data-placement="top" data-skin="brand" title="Validasi"
                          class="kt-tooltip btn btn-outline-hover-info btn-icon">
                          <span class="text-info">
                            <i class="fa fa-check-square"></i>
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
        </div>
      </div>
    </div>
  </div>
</div>