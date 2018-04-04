<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this-->load-->model('blog');
		$data["query"] = $this-->blog-->get_last_ten_entries();
		$this-->load-->view('home',$data);
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}
}
