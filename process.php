<?php
//session_start();
//include ("assets/includes/config.php");
$conn = mysqli_connect("localhost","root","","fees_informationsytem");
if (isset($_POST['submit']))
{
    $First_name=$_POST['fname'];
    $Last_name=$_POST['lname'];
    $Dob=$_POST['dob'];
    $Gender=$_POST['gender'];
    $Pfname = $_POST['pfname'];
    $Plname = $_POST['plname'];
    $Pmobile = $_POST['pmobile'];
    $Pemail=$_POST['pemail'];
    $Paddress = $_POST['paddress'];
    $Password = $_POST['password'];
    $AdmNumber=$_POST['admnumber'];
    $Class=$_POST['class']; 


    




$sql="INSERT INTO tbl_student (stud_ID,stud_FName,studLName,stud_DateofBirth,stud_Gender,stud_ParentFName,stud_ParentLName,stud_ParentContact,stud_ParentEmail,stud_Address,stud_RegDate,stud_Password,stud_UpdateDate,stud_AdmissionNumber,class_ID)VALUES(Null'$First_name','$Last_name','$Dob','$Gender','$Pfname','$Plname','$Pmobile','$Pemail','$Paddress',NOW(),'$Password',NOW(),'$AdmNumber','$Class')";
//$insert=setData($sql);
$insert = mysqli_query($conn, $sql);

	if($insert===TRUE)
	{
		echo "Insert successfull";
    }
   else{
                 
       echo "Insert unsuccessfull";
	   }
    
    
    
}
?>