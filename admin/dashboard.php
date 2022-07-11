<?php
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

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="dashboard.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="dashboard.php">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-school'></i>
					<span class="text">
						<h3>Classes</h3>
						<p><a href="manageclasses.php">Manage classes</a></p>
					</span>
				</li>
				<li>
					<i class='bx bx-body'></i>
					<span class="text">
						<h3>Students</h3>
						<p><a href="managestudents.php">Manage Students</a></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-folder'></i>
					<span class="text">
						<h3>Payment Methods</h3>
						<p><a href="managepayments.php">payment methods</a></p>
					</span>
				</li>
				<li>
					<i class='bx bx-folder' ></i>
					<span class="text">
						<h3>Total Fees Paid</h3>
						<p><a href="viewFeepayment.php">View Total Fees Paid</a></p>
					</span>
				</li>
				<li>
					<i class='bx bx-folder-open' ></i>
					<span class="text">
						<h3>Total Feess Balance</h3>
						<p> <a href="viewFeebalance.php">View Fees Balance</a></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-message-dots' ></i>
					<span class="text">
						<h3>Parents Contacts</h3>
						<p><a href = "viewParentscontacts.php">View Parents Contacts </a></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-file-pdf'></i>
					<span class="text">
						<h3>Fees Report</h3>
						<p><a href = "viewFeesreport.php">Generate Fees Report</a></p>
					</span>
				</li>
			</ul>
    </section>


	

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
   <script src="assets/js/script.js"></script>

 </body>
</html>