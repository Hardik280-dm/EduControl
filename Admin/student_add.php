<?php
    include "sidebar.php";
    include "../assets/Database/Connection.php";
    include "../assets/Database/Db_functions.php";

    $db = new Database;
    $conn = $db->conn;
    const TABLE = "student_meta";


    if(isset($_POST["submit"])){

        $db->add_student
        (
            $_POST["fname"],
            $_POST["lname"],
            $_POST["gender"],
            $_POST["bdate"],
            $_POST["applied_d"],
            $_POST["applied_c"],
            $_POST["total_fee"],
            $_POST["father"],
            $_POST["mother"],
            $_POST["occupation"],
            $_POST["parent_no"],
            $_POST["std_no"],
            $_POST["std_email"],
            $_POST["add"],
            $_POST["N_id"],
            $_POST["prev_tc"],
            $_POST["add_p"],
            $_POST["p_photo"]
        );
        // takeout  Recently generate Std-id 
        $stdId = $conn->insert_id;
        $initial = $_POST["fname"][0].$_POST["lname"][0];

        [$bg,$txt] = getAvatarColor($_POST["fname"]);
        avater_colors($stdId,$conn,TABLE,$bg,$txt,$initial);
    }
    ?>
<html>

    <link rel="stylesheet" href="../assets/css/admin.css">
    <form method="post">
        <body style="">
            
            <div class="main-wrapper" style="overflow-y:auto; overflow-x:hidden; scrollbar-width:none; ">
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
                        <h1>Student Admission Form</h1>
                        <h3>Complete the sections below to enroll a new student into the academic system.</h3>
                    </div>
                    <div class="dashboard-heading-btn add-std">
                        <a  onclick="add_cancle()"  style="text-decoration:none;">
                            <button style="background-color:white; color:gray; border:1px solid gray;">Cancle</button>
                        </a>
                        <button type="submit" class="open-modal" name="submit">
                            Save Student
                        </button>
                    </div>
                </div>
                
                <div class="std-add-card-cnt">  
                    <div  class="std-add-inner-cnt">
                        <div class="" style="display:flex; flex-direction:row; gap:10px;">
                            <div class="std-add-card_1">
                                <div class="card_1-hd">
                                    <i class="fa-regular fa-user"></i>
                                    <h2>Personal Information</h2>
                                </div>
                                <div class="" style="display:flex; gap:10px; flex-direction:row;">
                                    <input type="file" id="std-img" name="p_photo" hidden>
                                    <label for="std-img" style="cursor:pointer;">
                                        <div class="card_1-img">
                                            <div class="card_1-img-icon"><i class="fa-regular fa-camera"></i></div>
                                            <p>Click to upload Student Profile Photo</p> 
                                        </div>
                                    </label>
                                    <div class="card_1-inner-cnt">
                                        <div class="card_1-inner">
                                            First name 
                                            <input type="text" name="fname"> <br>
                                            
                                            Date Of Birth<br>
                                            <input type="date" name="bdate">
                                        </div>
                                        <div class="card_1-inner">
                                            Last name <br>
                                            <input type="text" name="lname"> <br>
                                            
                                            Gender<br>
                                            <select name="gender">
                                                <option value=""> Select Gender </option>
                                                <option value="Male"> Male </option>
                                                <option value="Female"> Female </option>
                                                <option value="other"> Other </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="std-add-card_2">
                                <div class="card_1-hd">
                                    <i class="fa-solid fa-building-columns"></i>
                                    <h2>Academic Details</h2>
                                </div>
                                <div class="card_1-inner academic-cnt">
                                    <div class="">
                                        Applied Department <br>
                                        <select name="applied_d">
                                            <option value=""> Select Department </option>
                                            <option value="Computer Science & AI"> Computer Science & AI </option>
                                            <option value="Business"> Business  </option>
                                        </select>
                                    </div>
                                    <div  class="">
                                        Applied Course <br>
                                        <select name="applied_c">
                                            <option value=""> Select Department </option>
                                            <option value="BCA"> BCA </option>
                                            <option value="BBA"> BBA  </option>
                                        </select>
                                    </div>
                                    <div class="flex-container-cw" style="gap:5px;">
                                        Total Fees (Per samester) <br>
                                        <input type="tel" name="total_fee">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" style="display:flex; flex-direction:row;  gap:10px;">
                            <div class="std-add-card_1" style="width:700px; height:350px; display:flex; flex-direction:row; gap:30px; " >
                                <div class="std-add-card-fm">
                                    <div class="std-add-card-fm-hd">
                                        <i class="fa-solid fa-timeline " style="color:blue; font-size:25px;"></i>
                                        <h2>Family-Details</h2>
                                    </div>
                                    <div class="std-add-card-fm-in">
                                        Father's Name <br>
                                        <input type="text" name="father"> <br>
                                        Mother's Name <br>
                                        <input type="text" name="mother"> <br>
                                        Guardian's Occupation <br>
                                        <input type="text" name="occupation"> <br>
                                        Parent Phone Number <br>
                                        <input type="text" name="parent_no"> <br>
                                    </div>
                                </div>
                                
                                <div  class="std-add-card-fm">
                                    <div class="std-add-card-fm-hd">
                                        <i class="fa-regular fa-address-card" style="color:blue; font-size:25px;"></i>
                                        <h2>Contect-Information</h2>
                                    </div>
                                    <div class="std-add-card-fm-in">
                                        Phone Number <br>
                                        <input type="text" name="std_no"> <br>
                                        Email Address <br>
                                        <input type="text" name="std_email"> <br>
                                        Residential Address <br>
                                        <textarea rows="5" cols="5" name="add"></textarea> <br>
                                    </div>
                                </div>
                            </div>
                            <div class="std-add-card_2" style="width:500px; height:350px;">
                                <div class="card_1-hd" style="padding-bottom:5px;">
                                    <i class="fa-solid fa-file-arrow-up"></i>
                                    <h2>Document Upload</h2>
                                </div>
                                <div class="" style="display:flex; flex-direction:column; gap:20px; align-items:center; justify-content:center; width:100%; margin:20px 0 20px 0;">
                                    <div class="std-upload-d">
                                        <div class="upload-d-card">
                                            <div class="flex-container-rw" style="gap:20px;">
                                                <i class="fa-regular fa-address-card"></i>
                                                <div class="flex-direction-cw">
                                                    <h4>National Id Proof</h4>
                                                    <p  style="font-size:14px; color:#404754;">PDG,JPG Up to 5MB</p>
                                                </div>
                                            </div>
                                            <div  class="" >
                                                <input type="file" id="Id" name="N_id" hidden>
                                                <label  for="Id" class="upload-btn" >Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="std-upload-d">
                                        <div class="upload-d-card">
                                            <div class="flex-container-rw" style="gap:20px;">
                                                <i class="fa-regular fa-file"></i>
                                                <div class="flex-direction-cw">
                                                    <h4>Previous Transcripts</h4>
                                                    <p  style="font-size:14px; color:#404754;">School or collage leaving certificate(PDF)</p>
                                                </div>
                                            </div>
                                            <div  class="" >
                                                <input type="file" id="prev_tc" name="prev_tc" hidden>
                                                <label  for="prev_tc" class="upload-btn">Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="std-upload-d">
                                        <div class="upload-d-card">
                                            <div class="flex-container-rw" style="gap:20px;">
                                                <i class="fa-regular fa-house"></i>
                                                <div class="flex-direction-cw">
                                                    <h4>Address Proof</h4>
                                                    <p  style="font-size:14px; color:#404754;">Ration Card(PDF,JPG)</p>
                                                </div>
                                            </div>
                                            <div  class="" >
                                                <input type="file" id="add_p" name="add_p" hidden>
                                                <label  for="add_p" class="upload-btn">Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </form>
    <script src="model.js"></script>
    <!-- <style> .admin-h {position:fixed;}</style> -->
    </html>