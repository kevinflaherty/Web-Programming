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
}