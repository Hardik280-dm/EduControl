<?php
    include "sidebar.php";
    include "../assets/Database/Connection.php";
    
        $db = new Database();
        if(isset($_POST["submit"])){

            $db->add_faculty
            (
                $_POST["profile_photo"],
                $_POST["F_name"],
                $_POST["L_name"],
                $_POST["gender"],
                $_POST["b_date"],
                $_POST["applied_dep"],
                $_POST["salary"],
                $_POST["father"],
                $_POST["mother"],
                $_POST["occupation"],
                $_POST["parent_n"],
                $_POST["email"],
                $_POST["mobile_no"],
                $_POST["address"],
                $_POST["N_Id"],
                $_POST["Phd_c"],
                $_POST["Address_p"],
                $_POST["joining_d"],
                $_POST["qualification"],
                $_POST["degree"],
                $_POST["acedemic_cv"],
            );
        }
    ?>
<html>

    <link rel="stylesheet" href="../assets/css/admin.css">
    <form method="post">
    <body>
        <div class="main-wrapper" style="overflow-y:auto; overflow-x:hidden; scrollbar-width:none; scrollbar-color:#888 #f1f1f1; padding-bottom:20px;">
            <?php include "header.php";?>
            <div class="" style="border-bottom:1px solid #A4ABBB; display:none; align-items:center; justify-content:flex-start; ">
                <h2 style="margin:0; padding:5px; padding-top:0; font-family:sans-serif; color:#003DAB; margin-left:40px;">Add New Student</h2>
            </div>
            <div class="dashboard-heading-wrapper">
                <div class="dashboard-heading">
                    <div class="std-add-hd">
                        <p>student /<span style="color:#1353D8;"> registration </span>
                        </p>
                    </div>
                    <h1>Add New Faculty</h1>
                    <h3>Register a new educator into the academic information system.</h3>
                </div>
                <div class="dashboard-heading-btn add-std">
                    <a  onclick="add_cancle()"  style="text-decoration:none;">
                        <button style="background-color:white; color:gray; border:1px solid gray;">Cancle</button>
                    </a>
                    <button type="submit" class="" name="submit">
                        Register Faculty
                    </button>
                </div>
            </div>
            
            <div class="std-add-card-cnt">  
                <div  class="std-add-inner-cnt" >
                    <div class="flex-container-cw">
                        <div class="flex-container-rw">
                            <div class="std-add-card_1 fac-card-1">
                                <div class="card_1-hd" style="padding:12px 0 12px 0; white-space:nowrap; margin:0;">
                                    <i class="fa-regular fa-user"></i>
                                    <h2>Personal Information</h2>
                                </div>
                                <div class="" style="display:flex; gap:10px; flex-direction:column;">
                                    <input type="file" id="std-img" name="profile_photo"hidden>
                                    <label for="std-img" style="cursor:pointer;" >
                                        <div class="card_1-img">
                                            <div class="card_1-img-icon"><i class="fa-regular fa-camera"></i></div>
                                            <p>Click to upload Student Profile Photo</p> 
                                        </div>
                                    </label>
                                    <div class="card_1-inner-cnt" style="flex-direction:column; gap:0;">
                                        <div class="card_1-inner">
                                            Employee Id (System Generated) <br>
                                            <input type="text"> <br>
                                            First name <br>
                                            <input type="text"  name="F_name"> <br>
                                            Last name <br>
                                            <input type="text" name="L_name"> <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex-container-cw">
                                <div class="std-add-card_2 fac-card-2">
                                    <div class="card_1-hd">
                                        <i class="fa-solid fa-building-columns"></i>
                                        <h2>Academic Details</h2>
                                    </div>
                                    <div class="card_1-inner academic-cnt" style="flex-direction:column; align-items:flex-start; justify-content:flex-start;">
                                        <div class="" style="display:flex; flex-direction:row; gap:20px;">
                                            <div class="">
                                                Applied Department <br>
                                                <select name="applied_dep">
                                                    <option value=""> Select Department </option>
                                                    <option value="Computer Science & AI"> Computer Science & AI </option>
                                                    <option value="Business"> Business  </option>
                                                </select>
                                            </div>
                                            <div  class="">
                                                Designation<br>
                                                <select name="designation">
                                                    <option value=""> Select Designation</option>
                                                    <option value="HOD  (Head of Department)"> HOD (Head of Department) </option>
                                                    <option value="lacturer"> lacturer  </option>
                                                </select>
                                            </div>
                                            <div class="">
                                                Salary <br>
                                                <input type="number" name="salary">
                                            </div>
                                        </div>
                                        <div class="" style="display:flex; gap:20px; align-items:center; flex-direction:row;">
                                            <div class="" style="display:flex; flex-direction:column; gap:5px;"> 
                                                Joining Date <br>
                                                <input type="date" name="joining_d">
                                            </div> 
                                            <div class="">
                                                Qualification <br>
                                                <select name="qualification" style="height:28px; width:200px;">
                                                    <option value=""> Select qualification </option>
                                                    <option value="Graduation"> Graduation </option>
                                                    <option value="Master"> Master </option>
                                                    <option value="PHD"> PHD </option>
                                                </select>
                                            </div>
                                            <div class="">
                                                Degrees <br>
                                                <select name="degree" style="height:28px; width:200px;">
                                                    <option value="">Select Digree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="std-add-card_2 fac-card-2">
                                    <div class="card_1-hd">
                                        <i class="fa-regular fa-address-card" style="color:blue; font-size:25px;"></i>
                                            <h2>Contect & Personal</h2>
                                    </div>
                                    <div class="card_1-inner academic-cnt" style="gap:10px; flex-direction:column; justify-content:flex-start;" >
                                        <div class="flex-container-rw">
                                            <div class="flex-container-cw">
                                                <label >Mobile Number </label>
                                                <input type="tel" name="mobile_no"> 
                                            </div>
                                            <div class="flex-container-cw">
                                                <label> E-mail Address </label>
                                                <input type="email" name="email"> 
                                            </div>
                                            <div class="flex-container-cw">
                                                <label>Date of Birth </label>
                                                <input type="date" name="b_date">
                                            </div>
                                            <div class="card_1-inner half" style="">
                                                Gender<br>
                                                <select name="gender">
                                                    <option value=""> Select Gender </option>
                                                    <option value="Male"> Male </option>
                                                    <option value="Female"> Female </option>
                                                    <option value="Other"> Other </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex-container-cw">
                                            <label> Residential Address </label>
                                            <textarea rows="4" cols="30" name="address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-container-rw">
                            <div class="std-add-card_1" style="width:700px; height:350px; display:flex; flex-direction:column; gap:30px; " >
                                <div class="card_1-hd" style="padding-bottom:5px;">
                                    <i class="fa-solid fa-file-arrow-up"></i>
                                    <h2>Document Upload</h2>
                                </div>
                                <div class="" style="display:flex; flex-direction:column; align-items:center; gap:20px;  width:100%; ">
                                    <div class="std-upload-d fac-up fac-i">
                                        <div class="upload-d-card">
                                            <div class="flex-container-rw" style="gap:20px;">
                                                <i class="fa-regular fa-file-lines"></i>
                                                <div class="flex-direction-cw">
                                                    <h4>Acedemic CV(PDF)</h4>

                                                </div>
                                            </div>
                                            <div  class="" >
                                                <input type="file" id="acedemic_cv" name="acedemic_cv" hidden>
                                                <label  for="Id" class="upload-btn"><i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="std-upload-d fac-up fac-i">
                                        <div class="upload-d-card">
                                            <div class="flex-container-rw" style="gap:20px;">
                                                <i class="fa-solid fa-award"></i>
                                                <div class="flex-direction-cw">
                                                    <h4>PhD Certificate</h4>

                                                </div>
                                            </div>
                                            <div  class="" >
                                                <input type="file" id="Phd_c" name="Phd_c"hidden>
                                                <label  for="Phd_c" class="upload-btn"><i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="std-upload-d fac-up fac-i">
                                        <div class="upload-d-card">
                                            <div class="flex-container-rw" style="gap:20px;">
                                                <i class="fa-regular fa-address-card"></i>
                                                <div class="flex-direction-cw">
                                                    <h4>National Id Proof</h4>
                                                </div>
                                            </div>
                                            <div  class="" >
                                                <input type="file" id="N_Id" name="N_Id" hidden>
                                                <label  for="N_Id" class="upload-btn" ><i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="std-upload-d fac-up fac-i">
                                        <div class="upload-d-card">
                                            <div class="flex-container-rw" style="gap:20px;">
                                                <i class="fa-regular fa-house"></i>
                                                <div class="flex-direction-cw">
                                                    <h4>Address Proof</h4>
                                                </div>
                                            </div>
                                            <div  class="" >
                                                <input type="file" id="Address_p" name="Address_p" hidden>
                                                <label  for="Address_p" class="upload-btn"><i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="std-add-card_1 fac-add-2">                            
                                <div class="std-add-card-fm" style="padding:0; margin:0;">
                                    <div class="card_1-hd" style="padding-bottom:5px;">
                                        <i class="fa-solid fa-timeline" style="color:blue; font-size:25px;"></i>
                                        <h2>Family-Details</h2>
                                    </div>
                                    <div class="std-add-card-fm-in" style="padding:0 10px 0 20px">
                                        Father's Name <br>
                                        <input type="text" name="father"> <br>
                                        Mother's Name <br>
                                        <input type="text" name="mother"> <br>
                                        Guardian's Occupation <br>
                                        <input type="text" name="occupation"> <br>
                                        Parent Phone Number <br>
                                        <input type="text" name="parent_n"> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </body>
    <script src="model.js"></script>
    <!-- <style> .admin-h {position:fixed;}</style> -->
    </html>