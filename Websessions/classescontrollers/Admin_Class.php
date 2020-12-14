<?php
//connecting to DB
require(dirname(__FILE__))."../Settings/db_class.php";

/**
*Admin class for everything admin related
*/
class admin_class extends db_connection
{
	/**
	*adding new admin (name, email, contact number and password.)
	*/
	public function addadmin($a, $b, $c, $d){
		//sql query
		$sql = "INSERT INTO admins (`Admin_Name`,`Email`,`Password`,`Contact`,`Role`) VALUES('$a', '$b', '$c', '$d', 2)";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view all admin info 
	*/
	public function viewadmin(){
		//sql query
		$sql = "SELECT * FROM admins";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*view admin by id
	*/
	public function view_admin($pa){
		//sql query
		$sql = "SELECT * FROM admins WHERE Admin_ID=$pa";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*update admin info 
	*/
	public function updateadmin($a, $b, $c, $d){
		//sql query 
		$sql = "UPDATE admins SET Admin_Name=$b, Email=$c, Password=$d,Contact=$e WHERE Admin_ID=$a";
		//return executed query
		return $this->db_query($sql);
	}

	/**
	*delete admin by id
	*/
	public function deleteadmin($a){
		// sql query
		$sql = "DELETE FROM admins WHERE Admin_ID=$a";
		//return executed query
		return $this->db_query($sql);
	}
	
    /**
    *check if admin exists
    */
	public function checkfor_admin($email){
		// sql query 
        $sql = "SELECT `Email` from `admins` where `Email` = '$email'";
        // return executed query 
        return $this->db_query($sql);
    }

    public function login_admin($email){
    	// sql query
    	$sql = "SELECT `Password`, `Role`, `Admin_ID` from `admins` where `Email` = '$email'";
    	//return executed query
    	return $this->db_query($sql);
    }
}
?>
