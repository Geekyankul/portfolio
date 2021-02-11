<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{  
        $this->load->helper('url');
        $this->load->model('home_model');
		$data['pdata']=$this->home_model->getPortfolio();
		$this->load->view('home', $data);
	}
}
