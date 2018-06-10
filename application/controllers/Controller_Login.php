<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('header');
	}

	public function login(){
		$id = (isset($_POST["usrname"])?$_POST["usrname"]:'');
		$password = (isset($_POST["psw"])?$_POST["psw"]:'');
		$this->load->model('model_Login','ml');
		$data = $this->ml->Login_admin($id,$password);
		$this->load->view('content_admin',$data);
	}

	public function logout(){
		$this->load->view('header');
		destroy_session();
	}

	
}
