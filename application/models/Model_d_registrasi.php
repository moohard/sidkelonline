
            <?php
            class Model_d_registrasi extends Model_Master
            {
                    protected $table = 'd_registrasi';


                public function __construct()
                {
                    parent::__construct();
                }       
                    function all()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('r_villages','registrasi_alamat = villageId','LEFT');
        $qr=$this->db->get();
        if($qr->num_rows()>0)
            return $qr->result();
        else
            return false;
    }

    function by_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('r_villages','registrasi_alamat = villageId','LEFT');
        $this->db->where($id);
        $qr=$this->db->get();
        if($qr->num_rows()==1)
            return $qr->row();
        else
            return false;
    }



            }
            