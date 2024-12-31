<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

class d_registrasi extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->_template        = 'layouts/template';
        $this->_path_page       = 'pages/d_registrasi/';
        $this->_path_js         = null;
        $this->_judul           = 'D_registrasi';
        $this->_controller_name = 'd_registrasi';
        $this->_model_name      = 'model_d_registrasi';
        $this->_page_index      = 'index';

        $this->load->model($this->_model_name, '', TRUE);
    }

    public function index()
    {
        $data            = $this->get_master($this->_path_page . $this->_page_index);
        $data['scripts'] = ['d_registrasi'];

        $data['create_url']   = site_url($this->_controller_name . '/create') . '/';
        $data['update_url']   = site_url($this->_controller_name . '/update') . '/';
        $data['delete_url']   = site_url($this->_controller_name . '/delete') . '/';
        $data['response_url'] = site_url($this->_controller_name . '/response') . '/';

        $this->load->view($this->_template, $data);
    }

    function response()
    {
        $this->form_validation->set_rules('jenis_pendaftaran', 'Jenis Pendaftaran', 'trim|xss_clean');
        if ($this->form_validation->run()) {
            if (IS_AJAX) {
                $jenis_pendaftaran    = $this->input->post('jenis_pendaftaran');
                $data['datas']        = $this->{$this->_model_name}->get_ref_table('d_registrasi', '', ['registrasi_jenis_pendaftaran' => $jenis_pendaftaran]);
                $data['page_judul']   = "Data Pendaftaran";
                $data['modals']       = [$this->_path_page . 'modal_view'];
                $data['view_url']     = site_url($this->_controller_name . '/view') . '/';
                $data['validasi_url'] = site_url($this->_controller_name . '/validasi') . '/';
                $data['delete_url']   = site_url($this->_controller_name . '/delete') . '/';
                echo json_encode(
                    [
                        'status'   => 'success',
                        'response' => $this->load->view($this->_path_page . 'response', $data, FALSE)
                    ]
                );
            }
        } else {
            message('Ooops!! Something Wrong!! ' . validation_errors(), 'error');
        }
    }

    public function validasi()
    {
        $data                = $this->get_master($this->_path_page . 'form');
        $data['scripts']     = [];
        $data['save_url']    = site_url($this->_controller_name . '/save') . '/';
        $data['status_page'] = 'Create';
        $data['datas']       = false;
        $data['r_villages']  = $this->{$this->_model_name}->get_ref_table('r_villages');

        $this->load->view($this->_template, $data);
    }

    public function view()
    {
        if (IS_AJAX) {
            $id    = $this->encryptions->decode($this->uri->segment(3), $this->config->item('encryption_key'));
            $datas = $this->{$this->_model_name}->get_by_id('d_registrasi', ['registrasi_id' => $id]);          
            echo json_encode(
                [
                    'status'   => 'success',
                    'response' => '<iframe width="720" height="720" src="/d_registrasi/loadpdf/'.$datas->registrasi_file.'" frameborder="0"></iframe>'
                ]
            );
        }
    }

    public function loadimage()
    {
        $file = $this->uri->segment(3);
        ob_clean();
        $path = FCPATH . '../upload/' . $file;
        $size = getimagesize($path);
        header('Content-Type:' . $size['mime']);
        switch ($size['mime']) {
            case 'image/png':
                $img = imagecreatefrompng($path);

                imagepng($img);
                break;

            default:
                $img = imagecreatefromjpeg($path);
                imagejpeg($img);
                break;
        }
        imagedestroy($img);
    }

    public function loadpdf()
    {
        $file = $this->uri->segment(3);
        ob_clean();
        $path = FCPATH . '../upload/' . $file;
        
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $path . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($path);
    }
}