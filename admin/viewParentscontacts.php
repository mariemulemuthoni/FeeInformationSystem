<?php
include_once 'assets/includes/configure.php';
$sql = "SELECT * FROM tbl_student; ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<title>Admin Panel</title>
  </head>
<body>


<?php include('assets/includes/head.php');?>

<section id="content">
  <main>
  <div class="left table-responsive">
       <table class="table table-hover w-auto">

           <thead>
                <tr>
                    <th scope="col" >Student ID</th>
                    <th scope="col" >First Name</th>
                    <th scope="col" >Last Name</th>
                    <th scope="col" >Date of Birth</th>
                    <th scope="col" >Gender</th>
                    <th scope="col" >Parent's First Name</th>
                    <th scope="col" >Parent's Last Name</th>
                    <th scope="col" >Parent's Contact</th>
                    <th scope="col" >Parent's Email</th>
                    <th scope="col" >Student's Address</th>
                    <th scope="col" >Registeration Date</th>
                    <th scope="col" >Password</th>
                    <th scope="col" >Update Date</th>
                    <th scope="col" >Admission Number</th>
                    <th scope="col" >Class</th>
                </tr>
            </thead>
            <tbody>
              <?php
               if ($resultCheck > 0) {
                while ($rows = mysqli_fetch_assoc($result))
                {
              ?>
                <tr>
                <th scope="row"><?php echo $rows['stud_ID']; ?></th>
                <th scope="row"><?php echo $rows['stud_FName']; ?></th>
                <th scope="row"><?php echo $rows['stud_LName']; ?></th>
                <th scope="row"><?php echo $rows['stud_DateofBirth']; ?></th>
                <th scope="row"><?php echo $rows['stud_Gender']; ?></th>
                <th scope="row"><?php echo $rows['stud_ParentFName']; ?></th>
                <th scope="row"><?php echo $rows['stud_ParentLName']; ?></th>
                <th scope="row"><?php echo $rows['stud_ParentContact']; ?></th>
                <th scope="row"><?php echo $rows['stud_ParentEmail']; ?></th>
                <th scope="row"><?php echo $rows['stud_Address']; ?></th>
                <th scope="row"><?php echo $rows['stud_RegDate']; ?></th>
                <th scope="row"><?php echo $rows['stud_Password']; ?></th>
                <th scope="row"><?php echo $rows['stud_UpdateDate']; ?></th>
                <th scope="row"><?php echo $rows['stud_AdmissionNumber']; ?></th>
                <th scope="row"><?php echo $rows['class']; ?></th>
                <!--<th scope="row"><?php// echo $rows['class_ID']; ?></th>-->

                <?php
                 }
                }
               ?>
                
            </tbody>
        </table>
    </div>




  </main>








</section>



















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
   <script src="assets/js/script.js"></script>

 </body>
</html>