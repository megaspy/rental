<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
    }


	public function index()
	{
		$data = array();
		$data['title'] = "Cer Rental";
		master_view($this, 'index' , $data);
	}


	public function test() {
		
		echo $this->auth->ver();
		$this->auth->login("admin@admin.nz","test",true);
		echo $this->auth->get_error();
		if( $this->auth->has_role("admin"))
			echo "<br>true";
		else
			echo "<br>false";
	}

}
