<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct()
    {	
        parent::__construct();
        
    }

}

class Frontend_Controller extends MY_Controller {
    public function __construct()
    {	
        parent::__construct();
    }
}

class Backend_Controller extends MY_Controller {
    public function __construct()
    {	
        parent::__construct();
    }

    public $a = 2;
}