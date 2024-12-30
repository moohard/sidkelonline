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
                      <th>No</th>
                      <th>Alamat</th>
                      <th>Identitas Pendaftar (Nomor KTP)</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Pekerjaan</th>
                      <th>Jenis Perkara</th>
                      <th>Action</th>
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
                          <td><?= $row->registrasi_alamat ?></td>
                          <td><?= $row->registrasi_identitas ?></td>
                          <td><?= $row->registrasi_nama ?></td>
                          <td><?= $row->registrasi_tgl_lahir ?></td>
                          <td><?= $row->registrasi_pekerjaan ?></td>
                          <td><?= $row->registrasi_jenis_perkara ?></td>
                          <td>
                            <a href="<?= $view_url . $key ?>" title="view"
                              class="btn btn-outline-hover-danger btn-icon" data-skin="danger" data-toggle="kt-tooltip" data-placement="top" data-original-title="Brand skin">
                              <span class="text-danger">
                                <i class="fa fa-file-pdf"></i>
                              </span>
                            </a>
                            <a href="<?= $validasi_url . $key ?>" title="validasi"
                              class="btn btn-outline-hover-info btn-icon">
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