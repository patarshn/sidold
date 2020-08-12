<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ktp extends Admin_Controller{

    function __construct()
	{
        parent::__construct();
        $this->load->model('frontend/Form_KTP_M');
    }    
    
    function index(){

        $data = array(
            'ktp' => $this->Form_KTP_M->getAll(),
        );

        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/content_sidebar');
        $this->load->view('admin/partials/content_navbar');
        $this->load->view('admin/ktp/index',$data);
        $this->load->view('admin/partials/content_footer');
        $this->load->view('admin/partials/footer');
    }

}