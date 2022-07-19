<?php
include_once 'configure.php';

$Pname = $_POST['pname'];
$Pnumber = $_POST['pnumber'];
$Pemail = $_POST['pemail'];
$Snumber = $_POST['admnumber'];



    $sql = "INSERT INTO tbl_parentcontacts (Parent_name,Parent_number,Parent_email,stud_AdmNumber) VALUES ('$Pname','$Pnumber','$Pemail','$Snumber');"; 
    $result = mysqli_query($conn, $sql);
    /**if($result===TRUE)
	{
		echo "Insert successfull";
    }
   else{
                 
       echo "Insert unsuccessfull";
	   }*/
    

    header("Location: ../../addparentscontacts.php?submit = success");