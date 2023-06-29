<?php
    class M_hadir extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        
        function get_hadir()
        {
            //return $this->db->get('tbl_daftarrapat')->result_array;
            $query = $this->db->query("select * from tbl_daftarhadir");
            return $query->result();
            //print_r($query);
            //die();
        }
    }
?>