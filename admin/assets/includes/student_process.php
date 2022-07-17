<?php
//print_r($_POST);
include_once "assets/includes/configure.php";
//$conn = mysqli_connect("localhost","root","","fees_informationsytem");
//if (isset($_POST['submit']))
//{
    $First_name=$_POST['fname'];
    $Last_name=$_POST['lname'];
    $Dob=$_POST['day'];
    $Mob=$_POST['month'];
    $Yob=$_POST['year'];
    $Gender=$_POST['gender'];
    $Pname= $_POST['pname'];
    $Pcontact=$_POST['pnumber'];
    $Pemail=$_POST['email'];
    $Address=$_POST['address'];
    $Password = $_POST['password'];
    $AdmNumber=$_POST['admnumber'];
    $Class=$_POST['class']; 


    




$sql="INSERT INTO tbl_student VALUES('$First_name','$Last_name','$Dob','$Mob','$Yob','$Gender','$Pname','$Pcontact','$Pemail','$Address',NOW(),'$Password',NOW(),'$AdmNumber','$Class');";
//$insert=setData($sql);
$result = mysqli_query($conn, $sql);
//echo "<pre>";
//print_r($result);
//echo "</pre>";
//header("Location: addstudents.php?submit = success");

	if($result===TRUE)
	{
		echo "Insert successfull";
    }
   else{
                 
       echo "Insert unsuccessfull";
	   }
    
    
    
//}
?>