<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Insert extends CI_Controller {

	
	public function index(){
		$this->load->view('header');
	}

	public function inserteacher(){
		// $idTeacher=isset($_GET['idTeacher'])?$_GET['idTeacher']:"";
		// $FristName=isset($_GET['FristName'])?$_GET['FristName']:"";
		// $LastName=isset($_GET['LastName'])?$_GET['LastName']:"";
		// $this->load->model('model_Insert','em');
		// $query = $this->em-> insertteacher($idTeacher, $Fristame, $LastName);
		// if($query){
		// 	echo '<script>alert("เพิ่มข้อมลอาจารย์เรียบร้อยแล้ว");</script>';
		// 	//redirect('menu/reforestationProject','refresh');
		// }
		$this->load->view('insert_teacher');
	}

	public function inserstudent(){
			// $idStudent=isset($_GET['idStudent'])?$_GET['idStudent']:"";
			// $FristName=isset($_GET['FristName'])?$_GET['FristName']:"";
			// $LastName=isset($_GET['LastName'])?$_GET['LastName']:"";
			// $this->load->model('model_Insert','em');
			// $query = $this->em-> insertstudent($idTeacher, $Fristame, $LastName);
			// if($query){
			// 	echo '<script>alert("เพิ่มข้อมลอาจารย์เรียบร้อยแล้ว");</script>';
			// 	//redirect('menu/reforestationProject','refresh');
			// }
		// }
		$this->load->view('insert_student');
	}
}