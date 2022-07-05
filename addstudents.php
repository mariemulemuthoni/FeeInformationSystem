<?php
include ('assets/includes/config.php')
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="assets/css/addstyle.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Add Students </title>
</head>
<body>
    <div class="container">
        <header>Student Registration</header>

        <form action="process.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Student's Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="Enter student's first name" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Enter student's last name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter Student's birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select student's gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Admission Number</label>
                            <input type="number" name="admnumber" placeholder="Enter student's admission number" required>
                        </div>
                        <div class="input-field">
                            <label>Class</label>
                            <input type="number" name="class" placeholder="Enter student's class" required>
                        </div>

                    </div>
                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
        </div>
        <div class="form second">
                <div class="details ID">
                    <span class="title">Parents Details</span>

                    <div class="fields">

                        <div class="input-field">
                            <label>Parent's First Name</label>
                            <input type="text"name="pfname" placeholder="Enter Parent's First name" required>
                        </div>

                        <div class="input-field">
                            <label>Parent's Last Name</label>
                            <input type="text" name="plname" placeholder="Enter Parent's Last name" required>
                        </div>

                        <div class="input-field">
                            <label> Parent's Mobile Number</label>
                            <input type="number" name="pmobile" placeholder="Enter parent's Mobile number" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Parent Email</label>
                            <input type="text" name="pemail" placeholder="Enter Parent's email" required>
                        </div>

                        <div class="input-field">
                            <label>Parent's Address</label>
                            <input type="text" name="paddress" placeholder="Enter Parent's Address" required>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text"name="occupation" placeholder="Enter Parent's occupation" required>
                        </div>

                    </div>
                </div>

                        <div class="buttons">
                          <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                          </div>
                        
                          <button class="submit" name="submit" type="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                          </button>
                        </div>
        </div> 
    </div>

            
        </form>
    </div>

    <script src="assets/js/addscript.js"></script>
</body>
</html>
