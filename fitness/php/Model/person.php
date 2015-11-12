<?php
require_once '../inc/global.php';
class Person {
    public static function Get($id = null){
        $sql = "SELECT * FROM FitnessTracker_User";
        
        if($id) {
            $sql .=" WHERE id=$id";
            $ret = FetchAll($sql);
			return $ret[0];
		}else{
			return FetchAll($sql);			
        }
    }
    
    static public function Delete($id)
	{
		$conn = GetConnection();
		$sql = "DELETE FROM FitnessTracker_User WHERE id = $id";
		//echo $sql;
		$results = $conn->query($sql);
		$error = $conn->error;
		$conn->close();
		
		return $error ? array ('sql error' => $error) : false;
	}
	
	static public function Blank()
	{
		return array();
	}
	
		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['name'])) $errors['name'] = "is required";
			return count($errors) > 0 ? $errors : false ;
		}
	
		static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			$row2['dob'] = date( 'Y-m-d H:i:s', strtotime( $row2['dob'] ) );
			if (!empty($row['id'])) {
				$sql = "Update FitnessTracker_User
							Set name='$row2[name]', dob='$row2[dob]'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO FitnessTracker_User
						(name, dob, created_at)
						VALUES ('$row2[name]', '$row2[dob]', Now() ) ";				
			}
			
			
			//my_print( $sql );
			
			$results = $conn->query($sql);
			$error = $conn->error;
			
			if(!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}
			
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
}