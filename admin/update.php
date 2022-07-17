<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT stud_ID ,stud_Address, class_ID FROM tbl_student WHERE stud_ID=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: managestudents.php");
    }


}else if(isset($_POST['edit'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$address = validate($_POST['address']);
	$class = validate($_POST['class']);
	$id = validate($_POST['id']);

	if (empty($address)) {
		header("Location: edit.php?id=$id&error=Address is required");
	}else if (empty($class)) {
		header("Location: edit.php?id=$id&error=Class is required");
	}else {

       $sql = "UPDATE tbl_student
               SET stud_Address='$address',class_ID ='$class'
               WHERE stud_ID=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: managestudents.php?success=successfully updated");
       }else {
          header("Location: edit.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: managestudents.php");
}