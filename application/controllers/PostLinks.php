<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostLinks extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		// $this->load->view('menu/header');
    $this->load->view('menu/navbar');
    $this->load->view('posts/postLinks/post_1');
    // $this->load->view('menu/footer');
	}
	// public function contentSatu(){
	// 	$this->load->view('menu/header');
  //   $this->load->view('menu/navbar');
  //   $this->load->view('posts/postLinks/post');
  //   $this->load->view('menu/footer');
	// }
	
}
