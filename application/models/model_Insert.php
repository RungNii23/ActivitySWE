<?php

	class model_Insert extends CI_Controller
	{
		
		public function insertteacher($idTeacher, $FirstName, $LastName, ){
			$sql = "INSERT INTO teacher VALUES('".$idTeacher."', '".$FristName."', '".$LastName."')";
			$query = $this->db->query($sql);
			return $query;
		}

		public function insertstudent($idStudent, $FirstName, $LastName, ){
			$sql = "INSERT INTO teacher VALUES('".$idStudent."', '".$FristName."', '".$LastName."')";
			$query = $this->db->query($sql);
			return $query;
		}

	}
?>