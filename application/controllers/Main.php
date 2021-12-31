<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('menu/header');
		$this->load->view('menu/navbar');
		$this->load->view('index');
		$this->load->view('menu/footer');
	}
	public function about(){
		$this->load->view('menu/header');
    $this->load->view('menu/navbar');
    $this->load->view('menu/about');
    $this->load->view('menu/footer');
	}
	public function postPortal(){
		$this->load->view('menu/post_portal');
	}
	public function contact(){
		$this->load->view('menu/header');
    $this->load->view('menu/navbar');
    $this->load->view('menu/contact');
    $this->load->view('menu/footer');
	}
}
