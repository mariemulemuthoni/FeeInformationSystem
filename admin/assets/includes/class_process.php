<?php
include_once 'configure.php';

$Cname = $_POST['cname'];
//$Term = $_POST['term'];


    $sql = "INSERT INTO tbl_class(class_Name)VALUES ('$Cname');"; 
    $result = mysqli_query($conn, $sql);
    /**if($result===TRUE)
	{
		echo "Insert successfull";
    }
   else{
                 
       echo "Insert unsuccessfull";
	   }*/
    

    header("Location: ../../addclass.php?submit = success");