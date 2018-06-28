<?php
	class Registration extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('mod/registration_model.php');
		}

		public function index(){
			$this->data['Registration'] = $this->registration_model->getReg();
			$this->load->view('content/registration.php');

		}
	}
	?>