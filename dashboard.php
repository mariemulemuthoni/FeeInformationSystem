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


	<!-- SIDEBAR -->
	<section id="sidebar">
	
		<a href="#" class="brand">
			<i class='bx bx-home-smile'></i>
			<span class="text">Admin Panel</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="dashboard.php" target="_self">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
				
			</li>
			<li>
				<a class=" dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="false">
					<i class='bx bxs-school'></i>
					<span class="text">Classes</span>
				</a>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="addclass.php">Add class</a></li>
    <li><a class="dropdown-item" href="manageclasses.php">Manage classes</a></li>
    
  </ul>
			</li>
			<li>
			<a class=" dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="false" >
					<i class='bx bx-body'></i>
					<span class="text">Students</span>
				</a>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="addstudents.php">Add student</a></li>
    <li><a class="dropdown-item" href="managestudents.php">Manage students</a></li>
    
  </ul>
			</li>
			<li>
				<a href="managepayments.php">
					<i class='bx bxs-folder'></i>
					<span class="text">Payment Methods</span>
				</a>
			</li>
			<li>
				<a href="viewFeepayment.php">
					<i class='bx bx-folder' ></i>
					<span class="text">Total Fees Paid</span>
				</a>
			</li>
			<li>
				<a href="viewFeebalance.php">
					<i class='bx bx-folder-open' ></i>
					<span class="text">Total Fees Balance</span>
				</a>
			</li>
			<li>
				<a href="viewParentscontacts.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Parents Contacts</span>
				</a>
			</li>
			<li>
				<a href="viewFeesreport.php">
					<i class='bx bxs-file-pdf'></i>
					<span class="text">Fees report</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">1</span>
			</a>
			<a href="#" class="profile">
				<p>Profile</p>
			</a>
		</nav>
		<!-- NAVBAR -->

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


	

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>

</body>
</html>