<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index2.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index2.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = ($pass);
        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];


				// Query the database to fetch the user record
				$query2 = "SELECT admin FROM users WHERE user_name='$uname' ";
				$result2 = mysqli_query($conn, $query2);
				
				// Check if the query was successful and if any rows are returned
				if ($result2 && mysqli_num_rows($result2) > 0) {
					// Fetch the admin value from the retrieved row
					$row = mysqli_fetch_assoc($result2);
					$isAdmin = $row['admin'];
				
					// Check if the user is an admin
					if ($isAdmin) {
						// Redirect to the admin page
						header("Location: E-Learning/admin/indexadmin.html");
						exit();
					} else {
						// Redirect to the index page
						header("Location:E-Learning/arabic/openindexarabic.html");
						exit();
					}
				}
				
				
				
            	//header("Location:E-Learning/openindex.html");
		    
			
			
			
			
				//exit();
            }else{
				header("Location: index2.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index2.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index2.php");   
	exit();
}