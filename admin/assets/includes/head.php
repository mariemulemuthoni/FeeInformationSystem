<!-- SIDEBAR -->
<section id="sidebar">
	
    <a href="#" class="brand">
        <i class='bx bx-home-smile'></i>
        <span class="text">Admin Panel</span>
    </a>
    <ul class="side-menu top">
        <div>
        <li class="active">
            <a href="dashboard.php" target="_self">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
            
        </li>
        </div>




<div class="accordion" id="accordionExample">
  <div class="accordion-item ">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <a href=""> 
        <i class='bx bxs-school'></i>
         <span class="text">Classes</span>
      </a>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <li><a class="dropdown-item" href="addclass.php">Add class</a></li>
              <li><a class="dropdown-item" href="manageclasses.php">Manage classes</a></li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <a href=""> 
      <i class='bx bx-body'></i>
      <span class="text">Students</span>
      </a>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <li><a class="dropdown-item" href="addstudents.php" target="_self">Add student</a></li>
       <li><a class="dropdown-item" href="managestudents.php">Manage students</a></li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <a href=""> 
      <i class='bx bxs-folder'></i>
                <span class="text">Payment Methods</span>
      </a>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <li><a class="dropdown-item" href="addPaymentMethod.php">Add Payment Method</a></li>
              <li><a class="dropdown-item" href="managePaymentMethod.php">Manage Payment methods</a></li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      <a href=""> 
      <i class='bx bx-folder' ></i>
                <span class="text">Total Fees Paid</span>
      </a>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <li><a class="dropdown-item" href="viewFeeperterm.php"> Total Fees per Term</a></li>
              <li><a class="dropdown-item" href="viewTotalfee.php"> Total Fees for the School</a></li>
      </div>
    </div>
  </div>
  
 <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      <a href=""> 
      <i class='bx bx-folder-open' ></i>
                <span class="text">Total Fees Balance</span>
      </a>
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <li><a class="dropdown-item" href="viewFeebalance.php"> Total Fees Balance</a></li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      <a href=""> 
      <i class='bx bxs-file-pdf'></i>
                <span class="text">Fees report</span>
      </a>
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      
       <li><a class="dropdown-item" href="viewFeesreport.php">View Fees Report</a></li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      <a href=""> 
      <i class='bx bx-folder-open' ></i>
                <span class="text">Parent's Contact</span>
      </a>
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <li><a class="dropdown-item" href="addparentscontacts.php"> Add Parent's contact</a></li>
     <li><a class="dropdown-item" href="viewParentscontacts.php"> View Parent's contact</a></li>
      </div>
    </div>
  </div>
  
  
</div>
</ul>


    


</section>
<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			<form action="#">
				<div class="form-input ">
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


      <ul class="nav nav-tabs">
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Profile</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
      <li><a class="dropdown-item" href="logout.php">Log out</a></li>
    </ul>
  </li>
</ul>
      
			
		</nav>
		<!-- NAVBAR -->
    </section>