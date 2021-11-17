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
	// public function about(){
	// 	$this->load->view('menu/about');
	// }
	// public function anythingPost(){
	// 	$this->load->view('posts/post_portal');
	// }
	// public function contact(){
	// 	$this->load->view('menu/contact');
	// }
}
