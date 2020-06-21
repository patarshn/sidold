<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_KTP extends Frontend_Controller{

    function __construct()
	{
        parent::__construct();
        $this->load->model('frontend/Form_KTP_M');
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->library('form_validation');
    }    
    

    function rulesStore(){
        return [
            ['field' => 'nik',
            'label' => 'NIK',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'tempat_lahir',
            'label' => 'Tempat Lahir',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],
            
            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'golongan_darah',
            'label' => 'Golongan Darah',
            'rules' => 'required'],

            ['field' => 'kebangsaan',
            'label' => 'Kebangsaan',
            'rules' => 'required'],

            ['field' => 'pekerjaan',
            'label' => 'Pekerjaan',
            'rules' => 'required'],

            ['field' => 'pendidikan',
            'label' => 'Pendidikan',
            'rules' => 'required'],

            ['field' => 'status_kawin',
            'label' => 'Staus Pernikahan',
            'rules' => 'required'],

            ['field' => 'id_rw',
            'label' => 'RW',
            'rules' => 'required'],

            ['field' => 'id_rt',
            'label' => 'RT',
            'rules' => 'required'],
        ];
    }

    function index(){

        $jumbotron = array(
            "jumbotron" => "",
            "title" => "Form Kartu Tanda Penduduk"
        );

        $this->load->view('frontend/partials/header');
        $this->load->view('frontend/partials/content_navbar');
        $this->load->view('frontend/partials/content_jumbotron',$jumbotron);
        $this->load->view('frontend/form/form_ktp');
        $this->load->view('frontend/partials/content_footer');
        $this->load->view('frontend/partials/footer');
    }


    //ACTION
    public function store(){
        $validation = $this->form_validation;
        $validation->set_rules($this->rulesStore());
        if($validation->run()){
            if($this->Form_KTP_M->store()){
                $this->session->set_flashdata('success_message', 'Pengisian form berhasil, terimakasih');
                $callback = array(
                    'status' => 'success',
                    'message' => 'Data berhasil diinput',
                    'redirect' => base_url().'form_ktp',
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
        //redirect(base_url('form_ktp'), 'refresh');
    }

}