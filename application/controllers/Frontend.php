<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

class Frontend extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->_model_name = 'model_d_registrasi';
		$this->load->model($this->_model_name, '', TRUE);
	}

	public function index()
	{
		$data['r_villages']    = $this->{$this->_model_name}->get_ref_table('r_villages', '', array('district_id' => '640903'));
		$data['modal']         = ['pages/frontend/form','pages/frontend/form_prodeo'];
		$data['pages']         = 'pages/frontend/index';
		$data['jenis_perkara'] = $this->{$this->_model_name}->get_enum_values('d_registrasi', 'registrasi_jenis_perkara');
		$data['simpan_url']    = site_url('frontend/simpan');
		$data['scripts']       = ['frontend'];

		$this->load->view('new_layouts/template', $data);
	}

	function simpan()
	{
		$this->form_validation->set_rules('registrasi_alamat', 'Alamat', 'trim|xss_clean');
		$this->form_validation->set_rules('registrasi_identitas', 'Identitas Pendaftar (Nomor KTP)', 'trim|xss_clean');
		$this->form_validation->set_rules('registrasi_nama', 'Nama', 'trim|xss_clean');
		$this->form_validation->set_rules('registrasi_tgl_lahir', 'Umur', 'trim|xss_clean');
		$this->form_validation->set_rules('registrasi_pekerjaan', 'Pekerjaan', 'trim|xss_clean');
		$this->form_validation->set_rules('registrasi_jenis_perkara', 'Jenis Perkara', 'trim|xss_clean');
		if ($this->form_validation->run()) {
			if (IS_AJAX) {
				$registrasi_alamat        = $this->input->post('registrasi_alamat', true);
				$registrasi_jenis_perkara = $this->input->post('registrasi_jenis_perkara', true);
				$registrasi_identitas     = $this->input->post('registrasi_identitas', true);
				$registrasi_nama          = $this->input->post('registrasi_nama', true);
				$registrasi_tgl_lahir     = $this->input->post('registrasi_tgl_lahir', true);
				$registrasi_pekerjaan     = $this->input->post('registrasi_pekerjaan', true);
				$registrasi_file          = $_FILES['registrasi_file']['name'];

				$param = array(
					'registrasi_alamat'        => $registrasi_alamat,
					'registrasi_jenis_perkara' => $registrasi_jenis_perkara,
					'registrasi_identitas'     => $registrasi_identitas,
					'registrasi_nama'          => $registrasi_nama,
					'registrasi_tgl_lahir'     => $registrasi_tgl_lahir,
					'registrasi_pekerjaan'     => $registrasi_pekerjaan,
					'registrasi_file'          => $registrasi_file,
				);
				$cek   = $this->{$this->_model_name}->get_by_id('d_registrasi', array('registrasi_identitas' => $registrasi_identitas));

				if (empty($cek)) {
					$proses = $this->{$this->_model_name}->insert('d_registrasi', $param);
					if ($proses) {
						$status = $this->uploadFile('registrasi_file', pathinfo($_FILES['registrasi_file']['name'], PATHINFO_EXTENSION));
						if ($status) {
							echo json_encode(
								array(
									'status'  => 'success',
									'message' => 'Data Berhasil Disimpan'
								)
							);
						} else {
							$this->{$this->_model_name}->delete('d_registrasi', array('registrasi_identitas' => $registrasi_identitas));
						}
					} else {
						echo json_encode(
							array(
								'status'  => 'error',
								'message' => 'Gagal Menyimpan Data'
							)
						);
					}
				} else {
					echo json_encode(
						array(
							'status'  => 'error',
							'message' => 'Identitas Telah Terdaftar. Silakan hubungi administrator untuk mendaftar ulang!!'
						)
					);
				}
			}
		}
	}
	private function uploadFile($inputname, $ext)
	{
		$config['upload_path']   = '../upload/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['file_name']     = strtotime(date('Y-m-d H:i:s'));

		if (!file_exists($config['upload_path'])) {
			mkdir($config['upload_path'], 0755, true);
		}

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload($inputname)) {
			echo json_encode(
				array(
					'status'  => 'error',
					'message' => $this->upload->display_errors()
				)
			);
		} else {
			$data_img = $this->upload->data();

			$konfig['image_library']  = 'gd2';
			$konfig['source_image']   = $config['upload_path'] . $config['file_name'] . '.' . $ext;
			$konfig['maintain_ratio'] = true;
			if ($data_img['image_width'] > $data_img['image_height'])
				$konfig['width'] = 300;
			else
				$konfig['height'] = 300;
			$this->load->library('image_lib', $konfig);
			return $this->image_lib->resize();
		}
	}
}
