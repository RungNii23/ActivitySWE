<?php

class model_Login extends CI_Model {

  public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

  public function Login_admin($id,$password)
  {
      $db_user = null;
       $db_password =  null;
       $db_fname =  null;
       $db_lname =  null;
       $db_idtype_user =  null;
    $sql = "SELECT * FROM teacher where username='".$id."' AND password='".$password."' ";
     $query = $this->db->query($sql);
     $result = false;
     foreach($query->result_array() as $row){
       $db_user = $row["username"];
       $db_password = $row["password"];
       $db_fname = $row["FirstName"];
       $db_lname = $row["LastNname"];
       $db_idtype_user = $row["Activeflag"];
     }
     if($db_user == $id && $db_password == $password){
       $checkLogin = true;
       $_SESSION["FirstName"] = $db_fname;
       $_SESSION["LastNname"] = $db_lname;
       $_SESSION["Activeflag"] = $db_idtype_user;
     }
     return $result;

  }
}

?>