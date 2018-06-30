<?php
	class Registration extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('registration_model');
		}

		public function index(){
			$data['register']=$this->registration_model->getReg();
			$this->load->view('content/registration.php', $data);

		}
	}
	?>