<?php 
session_start(); 
include "db_conn.php";

if ( isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])
	&& isset($_POST['age'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$age =validate($_POST['age']);
	

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signuparabic.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signuparabic.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signuparabic.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signuparabic.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($age)){
        header("Location: signuparabic.php?error=Age is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signuparabic.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = ($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signuparabic.php?error=اسم المستخدم مأخوذ حاول مرة أخرى&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name, age) VALUES( '$uname', '$pass', '$name','$age')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signuparabic.php?success=تم إنشاء حسابك بنجاح");
	         exit();
           }else {
	           	header("Location: signuparabic.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signuparabic.php");
	exit();
}