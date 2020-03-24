<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends Frontend_Controller{

    function __construct()
	{
		parent::__construct();
    }    
    
    function index(){
        $data = $this->uri->segment(2);
        echo $data;
    }

    function form($url){
        

        $jumbotron = array(
            'jumbotron' => base_url('assets/my/img/1.jpg'),
            'title' => 'Form'
        );

        $this->load->view('frontend/partials/header');
        $this->load->view('frontend/partials/content_navbar');
        $this->load->view('frontend/partials/content_jumbotron',$jumbotron);
        $this->load->view('frontend/form/'.$url);
        $this->load->view('frontend/partials/content_footer');
        $this->load->view('frontend/partials/footer');
    }

    public function _remap($url)
    {   

        
        if (file_exists(APPPATH.'views/frontend/form/'.$url.'.php'))
        {
                $this->form($url);
        }
        else
        {
                $this->index();
        }
    }


}