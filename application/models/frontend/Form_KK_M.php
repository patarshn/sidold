<?php

class Form_KK_M extends MY_Model
{
    private $_table = 'tbl_form_kk';

    function __construct(){
		  parent::__construct();
    }
    
    public function store(){
        $_POST = $this->input->post();
        $data['nik'] = $_POST['nik'];

        $status = $this->db->insert($this->_table,$data) ? true:false;
        return $status;
        
    }
}