<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liens extends CI_Controller {

	public function __construct() {
    		parent::__construct();
    	$this->load->helper('url');
    	}
	
	public function inscri() {
		$this->load->view('inscription');
	}
	

	
}

