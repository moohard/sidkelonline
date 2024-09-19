
                <?php
                defined('BASEPATH') OR exit('No direct script access allowed');
                define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

                class d_registrasi extends MY_Controller {
                    function __construct()
                    {
                        parent::__construct();

                        $this->_template = 'layouts/template';
                        $this->_path_page = 'pages/d_registrasi/';
                        $this->_path_js = null;
                        $this->_judul = 'D_registrasi';
                        $this->_controller_name = 'd_registrasi';
                        $this->_model_name = 'model_d_registrasi';
                        $this->_page_index = 'index';

                        $this->load->model($this->_model_name,'',TRUE);
                    }

                    public function index()
                    {
                        $data = $this->get_master($this->_path_page.$this->_page_index);
                        $data['scripts'] = [];
                        $data['datas'] = $this->{$this->_model_name}->all();
                        $data['create_url'] = site_url($this->_controller_name.'/create').'/';
                        $data['update_url'] = site_url($this->_controller_name.'/update').'/';
                        $data['delete_url'] = site_url($this->_controller_name.'/delete').'/';
                        $this->load->view($this->_template, $data);
                    }

                    public function create()
                    {	
                        $data = $this->get_master($this->_path_page.'form');	
                        $data['scripts'] = [];	
                        $data['save_url'] = site_url($this->_controller_name.'/save').'/';	
                        $data['status_page'] = 'Create';
                        $data['datas'] = false;
                        $data['r_villages'] = $this->{$this->_model_name}->get_ref_table('r_villages');
	
                        $this->load->view($this->_template, $data);
                    }

                    public function update()
                    {		
                        $data = $this->get_master($this->_path_page.'form');	
                        $keyS = $this->encryptions->decode($this->uri->segment(3),$this->config->item('encryption_key'));
                        $data['scripts'] = [];	
                        $data['save_url'] = site_url($this->_controller_name.'/save').'/';	
                        $data['status_page'] = 'Update';
                        $key = ['registrasi_id'=>$keyS];
                        $data['datas'] = $this->{$this->_model_name}->by_id($key);
                        $data['r_villages'] = $this->{$this->_model_name}->get_ref_table('r_villages');
	
                        $this->load->view($this->_template, $data);
                    }

                    public function save()
                    {		
                        $registrasi_idOld = $this->input->post('registrasi_idOld');$this->form_validation->set_rules('registrasi_alamat','Alamat','trim|xss_clean');
$this->form_validation->set_rules('registrasi_nama','Nama Pendaftar','trim|xss_clean');
$this->form_validation->set_rules('registrasi_identitas','Nomor Identitas (KTP)','trim|xss_clean');
$this->form_validation->set_rules('registrasi_umur','Umur','trim|xss_clean');
$this->form_validation->set_rules('registrasi_pekerjaan','Pekerjaan','trim|xss_clean');
$this->form_validation->set_rules('registrasi_file','Upload','trim|xss_clean');
$this->form_validation->set_rules('registrasi_jenis_perkara','Jenis Perkara yang ingin didaftarkan','trim|xss_clean');

                        if($this->form_validation->run()) 
                        {	
                            if(IS_AJAX)
                            {
                                $registrasi_alamat = $this->input->post('registrasi_alamat');
$registrasi_nama = $this->input->post('registrasi_nama');
$registrasi_identitas = $this->input->post('registrasi_identitas');
$registrasi_umur = $this->input->post('registrasi_umur');
$registrasi_pekerjaan = $this->input->post('registrasi_pekerjaan');
$registrasi_file = $this->input->post('registrasi_file');
$registrasi_jenis_perkara = $this->input->post('registrasi_jenis_perkara');
	

                                $param = array(
                                    'registrasi_alamat'=>$registrasi_alamat,
'registrasi_nama'=>$registrasi_nama,
'registrasi_identitas'=>$registrasi_identitas,
'registrasi_umur'=>$registrasi_umur,
'registrasi_pekerjaan'=>$registrasi_pekerjaan,
'registrasi_file'=>$registrasi_file,
'registrasi_jenis_perkara'=>$registrasi_jenis_perkara,

                                );

                                if(empty($registrasi_idOld))
                                {
                                    $proses = $this->{$this->_model_name}->insert('d_registrasi',$param);
                                } else {
                                    $key = array('registrasi_id'=>$registrasi_idOld);
                                    $proses = $this->{$this->_model_name}->update('d_registrasi',$param,$key);
                                }

                                if($proses)
                                    message($this->_judul.' Berhasil Disimpan','success');
                                else
                                {
                                    $error = $this->db->error();
                                    message($this->_judul.' Gagal Disimpan, '.$error['code'].': '.$error['message'],'error');
                                }
                            }
                        } else {
                            message('Ooops!! Something Wrong!! '.validation_errors(),'error');
                        }
                    }

                    public function delete()
                    {
                        $keyS = $this->encryptions->decode($this->uri->segment(3),$this->config->item('encryption_key'));
                        $key = ['registrasi_id'=>$keyS];
                        $proses = $this->{$this->_model_name}->delete('d_registrasi',$key);
                        if ($proses) 
                            message($this->_judul.' Berhasil Dihapus','success');
                        else
                        {
                            $error = $this->db->error();
                            message($this->_judul.' Gagal Dihapus, '.$error['code'].': '.$error['message'],'error');
                        }
                    }
                }
                