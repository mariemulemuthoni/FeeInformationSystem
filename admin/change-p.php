<?php 
session_start();

if (isset($_SESSION['adm_ID']) && isset($_SESSION['Adm_UName'])) {

    include "db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: changepassword.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: changepassword.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: changepassword.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$olp = $op;
    	$nep = $np;
        $id = $_SESSION['adm_ID'];

        $sql = "SELECT Adm_Password
                FROM tbl_administrator WHERE 
                adm_ID='$id' AND Adm_Password='$olp'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE tbl_administrator
        	          SET Adm_Password='$nep'
        	          WHERE adm_ID='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: changepassword.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: changepassword.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: changepassword.php");
	exit();
}

}else{
     header("Location: dashboard.php");
     exit();
}