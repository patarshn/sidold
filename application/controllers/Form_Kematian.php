<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Kematian extends Frontend_Controller{

    function __construct()
	{
        parent::__construct();
        $this->load->model('frontend/Form_Kematian_M');
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->library('form_validation');
    }    
    

    function rulesStore(){
        return [
            ['field' => 'nik',
            'label' => 'NIK',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'pekerjaan',
            'label' => 'Pekerjaan',
            'rules' => 'required'],

            ['field' => 'tanggal_kematian',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'],

            ['field' => 'tempat_kematian',
            'label' => 'Tanggal Kematian',
            'rules' => 'required'],

            ['field' => 'penyebab_kematian',
            'label' => 'Penyebab Kematian',
            'rules' => 'required'],

            ['field' => 'captcha',
            'label' => 'Captcha Verifikasi',
            'rules' => 'required'],
        ];
    }

    function index(){

        $jumbotron = array(
            "jumbotron" => "",
            "title" => "Form Kematian"
        );

        $this->load->view('frontend/partials/header');
        $this->load->view('frontend/partials/content_navbar');
        $this->load->view('frontend/partials/content_jumbotron',$jumbotron);
        $this->load->view('frontend/form/form_kematian');
        $this->load->view('frontend/partials/content_footer');
        $this->load->view('frontend/partials/footer');
    }


    //ACTION
    public function store(){
        $validation = $this->form_validation;
        $validation->set_rules($this->rulesStore());
        if($validation->run()){
            if($this->Form_Kematian_M->store()){
                $this->session->set_flashdata('success_message', 'Pengisian form berhasil, terimakasih');
            }
            else{
                $this->session->set_flashdata('error_message', 'Mohon maaf, pengisian form gagal');
            }
        }
        else{
            $this->session->set_flashdata('error_message', validation_errors());
        }
        
        redirect(base_url('form_kematian'), 'refresh');
    }

}