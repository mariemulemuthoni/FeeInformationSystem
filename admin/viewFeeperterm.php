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
              <div><h2>Term 1</h2></div>
           <thead>
            <?php
            $sql = "SELECT * FROM tbl_payment WHERE term_ID = 1 ";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            ?>
                <tr>
                    <th scope="col" >Payment ID</th>
                    <th scope="col" >Fee ID</th>
                    <th scope="col" >Student ID</th>
                    <th scope="col" >Term ID</th>
                    <th scope="col" >Payment Mode</th>
                    <th scope="col" >Amount Paid</th>
                    <th scope="col" >Date Paid</th>
                    <th scope="col" >Admin ID</th>
                    <th scope="col" >Reference Number</th>
                </tr>
            </thead>
            <tbody>
              <?php
               if ($resultCheck > 0) {
                while ($rows = mysqli_fetch_assoc($result))
                {
              ?>
                <tr>
                <td ><?php echo $rows['paymentID']; ?></td>
                <td ><?php echo $rows['feeID']; ?></td>
                <td ><?php echo $rows['stud_ID']; ?></td>
                <td ><?php echo $rows['term_ID']; ?></td>
                <td ><?php echo $rows['paymentMode']; ?></td>
                <td ><?php echo $rows['amountPaid']; ?></td>
                <td ><?php echo $rows['datePaid']; ?></td>
                <td ><?php echo $rows['adm_ID']; ?></td>
                <td ><?php echo $rows['referenceNumber']; ?></td>

                <?php
                 }
                }
               ?>
                
            </tbody>
        </table>
        <table class="table table-hover w-auto">
              <div><h2>Term 2</h2></div>
           <thead>
            <?php
            $sql = "SELECT * FROM tbl_payment WHERE term_ID = 2 ";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            ?>
                <tr>
                    <th scope="col" >Payment ID</th>
                    <th scope="col" >Fee ID</th>
                    <th scope="col" >Student ID</th>
                    <th scope="col" >Term ID</th>
                    <th scope="col" >Payment Mode</th>
                    <th scope="col" >Amount Paid</th>
                    <th scope="col" >Date Paid</th>
                    <th scope="col" >Admin ID</th>
                    <th scope="col" >Reference Number</th>
                </tr>
            </thead>
            <tbody>
              <?php
               if ($resultCheck > 0) {
                while ($rows = mysqli_fetch_assoc($result))
                {
              ?>
                <tr>
                <td ><?php echo $rows['paymentID']; ?></td>
                <td ><?php echo $rows['feeID']; ?></td>
                <td ><?php echo $rows['stud_ID']; ?></td>
                <td ><?php echo $rows['term_ID']; ?></td>
                <td ><?php echo $rows['paymentMode']; ?></td>
                <td ><?php echo $rows['amountPaid']; ?></td>
                <td ><?php echo $rows['datePaid']; ?></td>
                <td ><?php echo $rows['adm_ID']; ?></td>
                <td ><?php echo $rows['referenceNumber']; ?></td>

                <?php
                 }
                }
               ?>
                
            </tbody>
        </table>

        <table class="table table-hover w-auto">
              <div><h2>Term 3</h2></div>
           <thead>
            <?php
            $sql = "SELECT * FROM tbl_payment WHERE term_ID = 3 ";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            ?>
                <tr>
                    <th scope="col" >Payment ID</th>
                    <th scope="col" >Fee ID</th>
                    <th scope="col" >Student ID</th>
                    <th scope="col" >Term ID</th>
                    <th scope="col" >Payment Mode</th>
                    <th scope="col" >Amount Paid</th>
                    <th scope="col" >Date Paid</th>
                    <th scope="col" >Admin ID</th>
                    <th scope="col" >Reference Number</th>
                </tr>
            </thead>
            <tbody>
              <?php
               if ($resultCheck > 0) {
                while ($rows = mysqli_fetch_assoc($result))
                {
              ?>
                <tr>
                <td ><?php echo $rows['paymentID']; ?></td>
                <td ><?php echo $rows['feeID']; ?></td>
                <td ><?php echo $rows['stud_ID']; ?></td>
                <td ><?php echo $rows['term_ID']; ?></td>
                <td ><?php echo $rows['paymentMode']; ?></td>
                <td ><?php echo $rows['amountPaid']; ?></td>
                <td ><?php echo $rows['datePaid']; ?></td>
                <td ><?php echo $rows['adm_ID']; ?></td>
                <td ><?php echo $rows['referenceNumber']; ?></td>

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