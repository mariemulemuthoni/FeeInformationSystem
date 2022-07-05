<?php
function connect()
{   
	$dbserver ="localhost";
	$dbuser ="root";
	$dbpass ="";
	$dbname ="fees_informationsytem";
	$link = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("Could not connect");
	return $link;
}
	
function getData($sql)
{
	$link = connect();
	$result = mysqli_query($link,$sql);
	if(mysqli_num_rows($result)>0)
    {
	while($row = mysqli_fetch_assoc($result))
	{
		$rows[]=$row;
		
	}
	return $rows;
}
}
function setData ($sql)
{
	$link =connect();
	if(mysqli_query($link,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
/*if($conn->connect_error){
    die("Not connected".$conn->connect_error);
}
else{
	echo"Connected Successfully";
}*/