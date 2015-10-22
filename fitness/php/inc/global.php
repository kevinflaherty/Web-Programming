<?php 
    function GetConnection(){
        return mysqli_connect('localhost','Kevin', 'admin06', 'c9');
    }