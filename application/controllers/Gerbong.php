<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerbong extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('M_Gerbong');
		$this->load->helper('url');

	}

		public function index()
		{
			$data['lokomotif'] = $this->M_Gerbong->get();
			$this->load->view('daftar', $data);
		}

		public function index1()
		{
			$data['kursi'] = $this->M_Gerbong->get1();
			$this->load->view('daftar1', $data);
		}

		public function index2()
		{
			$data['lokomotif'] = $this->M_Gerbong->get2();
			$this->load->view('daftar2', $data);
		}

}
