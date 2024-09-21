<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
		$data['r_villages'] = $this->{$this->_model_name}->get_ref_table('r_villages', '', array('district_id' => '640903'));
		$data['modal']      = 'pages/frontend/form';
		$data['pages']      = 'pages/frontend/index';
		$data['simpan_url'] = site_url('frontend/simpan');
		$data['scripts'] = ['frontend'];

		$this->load->view('new_layouts/template', $data);
	}
}