<?php
require ("assets/icludes/config.php");
if (isset($_POST['submit']))
{
    $First_name=$_POST['fname'];
    $Last_name=$_POST['lname'];
    $Gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $email=$_POST['mail'];
    $Phone_number=$_POST['pnumber'];
    $Username=$_POST['uname'];
    $Password=$_POST['Password'];
    $User_type=$_POST['User'];




$sql="INSERT INTO Clients(Firstname,Secondname,email,Phone_number,Username,Password,User_type)VALUES('$First_name','$Second_name','$email','$Phone_number','$Username','$Password','$User_type')";
$insert=setData($sql);

	if($insert===TRUE)
	{
		header("location:Log_in.php");
    }
   else{
                 
       echo "The credentials are incorrect";
	   }
    
    
    
}
?>