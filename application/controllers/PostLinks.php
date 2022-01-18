<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostLinks extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
    $this->load->view('posts/postLinks/post_1');
	}
	public function post_2(){
		$this->load->view('posts/postLinks/post_2');
	}
	public function post_3(){
		$this->load->view('posts/postLinks/post_3');
	}
	
}
