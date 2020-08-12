<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_KK extends Frontend_Controller{

    function __construct()
	{
        parent::__construct();
        $this->load->model('frontend/Form_KK_M');
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->library('form_validation');
    }    
    

    function rulesStore(){
        return [
            ['field' => 'nik',
            'label' => 'NIK',
            'rules' => 'required'],
        ];
    }

    function index(){

        $jumbotron = array(
            "jumbotron" => "",
            "title" => "Form Kartu Keluarga"
        );

        $this->load->view('frontend/partials/header');
        $this->load->view('frontend/partials/content_navbar');
        $this->load->view('frontend/partials/content_jumbotron',$jumbotron);
        $this->load->view('frontend/form/form_kk');
        $this->load->view('frontend/partials/content_footer');
        $this->load->view('frontend/partials/footer');
    }


    //ACTION
    public function store(){
        $validation = $this->form_validation;
        $validation->set_rules($this->rulesStore());
        if($validation->run()){
            if($this->Form_KK_M->store()){
                $this->session->set_flashdata('success_message', 'Pengisian form berhasil, terimakasih');
                $callback = array(
                    'status' => 'success',
                    'message' => 'Data berhasil diinput',
                    'redirect' => base_url().'form_kk',
                );
            }
            else{
                //$this->session->set_flashdata('error_message', 'Mohon maaf, pengisian form gagal');
                $callback = array(
                    'status' => 'error',
                    'message' => 'Mohon Maaf, Pengisian form gagal',
                );
            }
        }
        else{
            //$this->session->set_flashdata('error_message', validation_errors());
            $callback = array(
                'status' => 'error',
                'message' => validation_errors(),
            );

            
        }
        echo json_encode($callback);
        //redirect(base_url('form_kk'), 'refresh');
    }

}