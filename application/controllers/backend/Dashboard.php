<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend_Controller{

    function __construct()
	{
		parent::__construct();
    }    
    
    function index(){


        $this->load->view('backend/partials/header');
        $this->load->view('backend/partials/content_navbar');
        $this->load->view('backend/partials/content_sidebar');
        $this->load->view('backend/partials/content_main');
        $this->load->view('backend/partials/content_footer');
        $this->load->view('backend/partials/footer');
    }

}