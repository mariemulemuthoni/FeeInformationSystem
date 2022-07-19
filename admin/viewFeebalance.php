<?php
include_once 'assets/includes/configure.php';
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
            <?php
            $sql = "SELECT stud_AdmNumber,stud_FName, stud_LName,class_ID FROM tbl_student WHERE stud_AdmNumber = 3; ";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            ?>
                <tr>
                    <th scope="col" >Student ID</th>
                    <th scope="col" >Admission Number</th>
                    <th scope="col" >First Name</th>
                    <th scope="col" >Last Name</th>
                    <th scope="col" >Class</th>
                    <th scope="col" >Fee balnce</th>
                </tr>
            </thead>
            <tbody>
              <?php
               if ($resultCheck > 0) {
                $i = 0;
                while ($rows = mysqli_fetch_assoc($result))
                {
                  $i++;
              ?>
                <tr>
                  <th scope = "row"><?=$i?></th>
                
                <td ><?php echo $rows['stud_AdmNumber']; ?></td>
                <td><?php echo $rows['stud_FName']; ?></td>
                <td><?php echo $rows['stud_LName']; ?></td>
                <td><?php echo $rows['class_ID']; ?></td>
                <td>30000</td>
                </tr>

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