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
    </section>