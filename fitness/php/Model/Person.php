<?php
    include '../inc/global.php';
    class Person {
        static function Get(){
            $conn = GetConnection();
            $result = mysql_execute("SELECT * FROM FitnessTracker_User");
            $rs = mysqli_fetch($result);
            var_dump($rs);
        }
    }