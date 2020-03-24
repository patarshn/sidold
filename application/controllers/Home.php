<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller{

    function __construct()
	{
		parent::__construct();
    }    
    
    function index(){
        $this->load->view('frontend/partials/header');
        $this->load->view('frontend/partials/content_navbar');
        $this->load->view('frontend/partials/content_carousel');
        $this->load->view('frontend/home/index');
        $this->load->view('frontend/partials/content_footer');
        $this->load->view('frontend/partials/footer');
    }

}