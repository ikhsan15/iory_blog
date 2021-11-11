<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function about(){
		$this->load->view('menu/about');
	}
	public function anythingPost(){
		$this->load->view('posts/post_portal');
	}
	public function contact(){
		$this->load->view('menu/contact');
	}
}
