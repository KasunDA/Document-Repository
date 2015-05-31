<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
     {
          parent::__construct();

          $this->load->database();
          //load the login model
          $this->load->model('login_model');
     }

	public function index()
	{
		// $usr_result = $this->login_model->get_user('admin', 'test');
		// print_r($usr_result[0]->name);
		echo APPPATH.'third_party/captcha/captcha.php';
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */