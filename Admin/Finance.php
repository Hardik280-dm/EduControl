<?php
    include "sidebar.php";
    ?>
<html>

    <link rel="stylesheet" href="../assets/css/admin.css">
    <body>
        
        <div class="main-wrapper">
            <?php include "header.php";?>

            <!-- DashBoard Heading Container-1 -->
 
            <!-- <div class="dashboard-heading-wrapper">
                <div class="dashboard-heading">
                    <h1>Faculty Directory </h1>
                    <h3>Manage academic staff and departmental assignments.</h3>
                </div>
                    <div class="dashboard-heading-btn">
                        <button>
                            <span style="font-size:20px; margin-left:10px; margin-right:2px;">+</span>
                            Add Faculty
                       </button>
                    </div>
            </div> -->

            <!-- DashBoard Heading Container-2 -->
        
            <div class="dashboard-fac-container-wrapper-A1">
                <div class="dashboard-fac-container-A1">
                    <div class="dashboard-fac-cnt-2" style="width:100%; margin-top:25px;">
                        <div style="display:flex; flex-direction:column;  gap:10px;">
                            <div class="" style="display:flex; justify-content:space-between; margin-right:20px;">
                                <div class="fac-icons-fac-fin">
                                    <i class="fa-solid fa-money-bills"></i>
                                </div>
                                <h3>students</h3>
                            </div>
                            <div class="" style="display:flex; flex-direction:column; gap:2px; margin-top:15px;">
                                <h4> Total Students Paid</h4>
                                <h1> 2,450,000</h1>
                                <h5> 142 students<h5>
                            </div>
                        </div>
                    </div>
                </div>         
                <div class="dashboard-fac-container-A1">
                    <div class="dashboard-fac-cnt-2" style="width:100%; margin-top:25px;">
                        <div style="display:flex; flex-direction:column; gap:10px;">
                            <div class="" style="display:flex; justify-content:space-between; margin-right:20px;">
                                <div class="fac-icons-std-fin">
                                <i class="fa-regular fa-clock"></i>
                                </div>
                                <h3>students</h3>  
                            </div>
                            <div class="" style="display:flex; flex-direction:column; gap:2px; margin-top:15px;">
                                <h4> Total Students Pending</h4>
                                <h1> 2,450,000</h1>
                                <h5 style="color:red;"> 142 students<h5>  
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="dashboard-fac-container-A1">
                    <div class="dashboard-fac-cnt-2" style="width:100%; margin-top:25px;">
                        <div style="display:flex; flex-direction:column;  gap:10px;">
                            <div class="" style="display:flex; justify-content:space-between; margin-right:20px;">
                                <div class="fac-icons-fac">
                                    <i class="fa-solid fa-wallet"></i>
                                </div>
                                <h3>faculty</h3>
                            </div>
                            <div class="" style="display:flex; flex-direction:column; gap:2px; margin-top:15px;">
                                <h4> Total Faculty Paid</h4>
                                <h1> 2,450,000</h1>
                                <h5> 142 faculty<h5>
                            </div>
                        </div>
                    </div>
                </div>         
                <div class="dashboard-fac-container-A1">
                    <div class="dashboard-fac-cnt-2" style="width:100%; margin-top:25px;">
                        <div style="display:flex; flex-direction:column;  gap:10px;">
                            <div class="" style="display:flex; justify-content:space-between; margin-right:20px;">
                                <div class="fac-icons-staff-fin">
                                    <i class="fa-regular fa-hourglass"></i>
                                </div>
                                <h3>faculty</h3>
                            </div>
                            <div class="" style="display:flex; flex-direction:column; gap:2px; margin-top:15px;">
                                <h4> Total Faculty Pending</h4>
                                <h1> 2,450,000</h1>
                                <h5 style="color:red;"> 142 faculty<h5>
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>

            <!-- Main DashBoard Container (Activity) -->

            <div class="dashboard-activity-container">
                <div class="fac-table-heading">
                    <button> Student Fees </button>
                    <button> Faculty Salary </button>
                    <button> Staff Salary </button>
                </div>
                <div class="dashboard-fac-activity-hd-cnt">
                    <div class="fac-dropdown">
                        <select id="country">
                            <option value="">All Department</option>
                            <option value="">BCA</option>
                            <option value="">BBA</option>
                            <option value="">B.COM</option>
                        </select>
                        <select>
                            <option value="">All Status</option>
                            <option value="">Present</option>
                            <option value="">Absent</option>
                        </select>
                    </div>
                    <div class="" style="display:flex; flex-direction:row; align-items:center; gap:15px;">
                        <div class="py-button">
                            <a href="abc.php" style="text-decoration:none;">
                                <button>
                                <span style="font-size:20px; margin-left:10px; margin-right:2px;">+</span>
                                New Payment
                                </button>
                            </a>
                        </div>
                        <a href=""><i class="fa-solid fa-arrow-down" style="color:gray;"></i></a>
                    </div>
                </div>
                    <!-- <div class="fac-activity" style="display:flex; flex-direction:row; align-items:center; gap:10px;" >
                        <h1>Faculty Records</h1>
                        <p> 2,482 total </p>
                    </div> -->
                <!-- <div class="dashboard-activity-notice" style="margin:5px;  padding:0;"> -->
                    <!-- <img src="img.jpg" height="30px" width="40px" style="margin:10px; " >
                    <div class="dashboard-activity-notice-cnt">
                        <h2>New student registration:Juliana reed</h2>
                        <h4>applied for bachelor of computer science,Fall 2024 Documents verified by admissions</h4>
                    </div> -->

                    <div class="fac-table-wrapper">
                        <table >
                            <tr>
                                <th> faculty name </th>
                                <th>faculty id </th>
                                <th>department </th>
                                <th>amount</th>
                                <th> status </th>
                                <th>date</th>
                                <th> actions </th>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Use Avatar initial generation -->
                                    <div class="std-table-profile">
                                        <img src="../Design (DDS)/Color Combo.png" height="30px" width="30px;">

                                        
                                        <div class="std-table-profile-font">
                                            <!-- STUDENT NAME -->
                                            <h4 style="font-family:arial;font-weight:600; color:#2A313D;">James starlight</h4>
                                            <!-- STUDENT EMAIL -->
                                            <h6>abc@gmail.com</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h4> #STU-2023-001 </h4>
                                </td>
                                <td>
                                    <h4>Computer Science</h4>
                                </td>
                                <td>
                                    <h4>20,000</h4>
                                </td>
                                </td>
                                <td>
                                    <h4>Paid</h4>
                                </td>
                                <td>
                                    <h4> Active </h4>
                                </td>
                                <td>
                                    <a href="">View Profile</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>
</body>
</html>
