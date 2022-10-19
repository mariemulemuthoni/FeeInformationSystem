<?php  

if(isset($_GET['id'])){
   include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM tbl_class
	        WHERE class=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: manageclasses.php?success=successfully deleted");
   }else {
      header("Location: manageclasses.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: manageclasses.php");
}