<?php
session_start();
include_once 'assets/includes/configure.php';
?>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/dob.css">-->

	<title>Admin Panel</title>
  </head>
<body>


<?php include('assets/includes/head.php');?>
	
	<section id="content">
    <main>
	<div class="head-title">
	<div class="left">
        <h1>Register new Student</h1>
    <form action="process.php" method="post">


    <div class="col-6">
    <label for="admissionNumber" class="form-label">Admission Number</label><br>
    <input type="text" class="form-control" id="admissionNumber" name= "admnumber" required>
  </div>
               
  
  <div class="col-6">
    <label for="firstName" class="form-label">First Name</label><br>
    <input type="text" class="form-control" id="firstName" name= "fname" required>
  </div>
  <div class="col-6">
    <label for="lastName" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastName" name= "lname" required>
  </div><br>
  <div class="col-12">
  <label for="inputDob" class="form-label">Date of Birth</label><br>
         <span class="inputDob" >
            <label for="day">Day:</label>
            <select name="day" id="day" required></select>
        </span>
        <span class="inputDob" required>
            <label for="month">Month:</label>
            <select name="month" id="month" required></select>
        </span>
        <span class="inputDob" required>
            <label for="year">Year:</label>
            <select name="year" id="year" required>Year:</select>
        </span>
    
  </div><br>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" required>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
  </div>
  <div class="col-md-6">
    <label for="inputGender" class="form-label">Class</label>
    <select id="inputGender" class="form-select" name="class" required>
      <option selected>Choose...</option>
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputGender" class="form-label">Gender</label>
    <select id="inputGender" class="form-select" name="gender" required>
      <option selected>Choose...</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
  <div class="col-6">
    <label for="parentName" class="form-label">Parent Name</label><br>
    <input type="text" class="form-control" id="parentName" name= "pname" required>
  </div>
  <div class="row g-3">
  <label for="inputPhone" class="form-label">Phone Number</label>
  <div class="col-2">
    <input type="text" class="form-control" placeholder="code" value="+254" required>
  </div>
  <div class="col-4">
    <input type="text" class="form-control" placeholder="phone number" name="pnumber" required>
  </div>
</div><br>
  <div class="col-12">
    <input type="submit" class="btn btn-primary" value="Register" name="submit" required>
  </div>
</form>
           </main>
                </section>


	

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
   <script src="assets/js/script.js"></script>
   <script src="assets/js/dob.js"></script>

 </body>
</html>