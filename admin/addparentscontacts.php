

$Pfname = $_POST['pfname'];
    $Plname = $_POST['plname'];
    $Pmobile = $_POST['pmobile'];
    $Pemail=$_POST['pemail'];
    $Paddress = $_POST['paddress'];











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
                            <label>Password</label>
                            <input type="password"name="password" placeholder="Enter Student's Password" required>
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