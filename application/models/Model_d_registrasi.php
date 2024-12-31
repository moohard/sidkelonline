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
        $this->db->join('r_villages', 'registrasi_alamat = villageId', 'LEFT');
        $qr = $this->db->get();
        if ($qr->num_rows() > 0)
            return $qr->result();
        else
            return false;
    }

    function by_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('r_villages', 'registrasi_alamat = villageId', 'LEFT');
        $this->db->where($id);
        $qr = $this->db->get();
        if ($qr->num_rows() == 1)
            return $qr->row();
        else
            return false;
    }
    function get_kelurahan_by_id($id)
    {
        $this->db->select('villageId id, villageNama text');
        $this->db->from('r_villages');
        $this->db->where($id);
        $qr = $this->db->get();
        if ($qr->num_rows() > 1)
            return $qr->result();
        else
            return false;
    }
    function get_enum_values($table, $field)
    {
        $type = ($this->db->query("SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'"))->row()->Type;

        preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
        $enum = explode("','", $matches[1]);
        return $enum;
    }
}