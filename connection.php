<?php
ob_start();
session_start();
class connect{
	public function connection(){
        $conn=mysqli_connect("localhost","market","123456");
        if($conn){
            mysqli_select_db($conn,"market");
            mysqli_query($conn,"SET NAMES UTF8");
            return $conn;
        }else{
            echo 'Kết nối database thất bại';
            exit;
        }
    }
}
?>