<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('BlogsModel');
	}

	public function index()
	{
		$blogs = new BlogsModel;
		$data['data'] = $blogs->get_blogs();
		$this->load->view('includes/header');
		$this->load->view('blogs/list', $data);
		$this->load->view('includes/footer');
	}

	public function store(){
		
	}
	
	public function create(){
		$this->load->view('includes/header');
		$this->load->view('blogs/create');
		$this->load->view('includes/footer');
	}
}
