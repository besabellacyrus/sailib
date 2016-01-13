<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sailib {

    protected $CI;
    protected $tbl;
    protected $primary_id;
    protected $id;


    public function __construct($tbl = '', $primary_id = '', $id = '')
    {
        $this->CI =& get_instance();

        $this->tbl = $tbl;
        $this->primary_id = $primary_id;
        $this->id = $id;

    }

    public function getById($params) {

        $tbl = $params['tbl'];
        // $sql = "SELECT * FROM $tbl WHERE `receipt_id` = ?";

        $this->CI->db->where($params['primary_id'],  $params['id']);

        // $res = $this->CI->db->query($sql);
        $res = $this->CI->db->get($tbl);

        if ($res->num_rows() > 0) {
             return $res->result();
        } else {
            return FALSE;
        }

    }


    public function getAll($params) {
        
        $tbl = $params['tbl'];
        $limit = $params['limit'];

        $this->CI->db->limit($limit);
        $res = $this->CI->db->get($tbl);
        if ($res->num_rows() > 0) {
             return $res->result();
        } else {
            return FALSE;
        }
    }
}

?>
