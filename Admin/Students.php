<?php
    include "sidebar.php";
    include "../assets/Database/Connection.php";
    include "../assets/Database/Db_functions.php";

        $db = new Database();
        $result = $db->Select_students();
        $conn = $db->conn;
        const TABLE = "student_meta";
    ?> 
<html>

    <link rel="stylesheet" href="../assets/css/admin.css">
    <body>
        
        <div class="main-wrapper">
            <?php include "header.php";?>

            <!-- DashBoard Heading Container-1 -->
 
            <div class="dashboard-heading-wrapper">
                <div class="dashboard-heading">
                    <h1>Student Directory </h1>
                    <h3>Manage and monitor academic records for the 2023-2024 session.</h3>
                </div>
                    <div class="dashboard-heading-btn">
                        <a href="student_add.php" style="text-decoration:none;">
                        <button type="button" style="cursor:pointer;">
                            <span style="font-size:20px; margin-left:10px; margin-right:2px;">+</span>
                            Add Student
                       </button>
                        </a>
                    </div>
            </div>

            <!-- DashBoard Heading Container-2 -->
        
            <div class="dashboard-std-container-wrapper">
                <div class="dashboard-std-container-A1">
                    <div class="dashboard-std-cnt-2">
                        <div style="display:flex; flex-direction:column;  gap:10px;">
                            <div  class="std-icons-A1">
                                <i class="fa-solid fa-graduation-cap " class="std-icons"></i>     
                            </div>
                            <h3>total students </h3>
                        </div>
                        <h1> <?= mysqli_num_rows($result); ?></h1>
                    </div>
                </div>         
                <div class="dashboard-std-container-A1">
                    <div class="dashboard-std-cnt-2">
                        <div style="display:flex; flex-direction:column; gap:10px;">
                            <div class="std-icons-A2">   
                               <i class="fa-regular fa-circle-check"></i>
                            </div>
                        <h3>active enrollments </h3>
                        </div>
                        <h1> <?= mysqli_num_rows($result); ?></h1>
                    </div>   
                </div>
                <div class="dashboard-std-container-A1">
                    <div class="dashboard-std-cnt-2">
                        <div style="display:flex; flex-direction:column;  gap:10px;">
                            <div class="std-icons-A1">
                                <i class="fa-regular fa-calendar-check "></i>
                            </div>
                            <h3>average attendance </h3>
                        </div>
                        <h1> 94% </h1>
                    </div>
                </div>         
                <div class="dashboard-std-container-A1">
                    <div class="dashboard-std-cnt-2">
                        <div style="display:flex; flex-direction:column; gap:10px;">
                            <div class="std-icons-A3">
                                <i class="fa-solid fa-clipboard-list"></i>
                            </div>
                            <h3>panding applications</h3>
                        </div>
                        <h1> 28 </h1>
                    </div>   
                </div>
            </div>

            <!-- Main DashBoard Container (Activity) -->

            <div class="dashboard-activity-container">
                <div class="dashboard-activity-hd-cnt">
                    <div class="std-activity" style="display:flex; flex-direction:row; align-items:center; gap:10px;" >
                        <h1>Student Records</h1>
                        <p> 2,482 total </p>
                    </div>
                    <div>
                        <a href=""><i class="fa-solid fa-sliders" style="color:gray;"></i></a>
                        <a href=""><i class="fa-solid fa-arrow-down" style="color:gray;"></i></a>
                    </div>
                </div>
                    <div class="std-table-wrapper">
                        <table>
                            <tr style="border-bottom:1px solid lightgray;">
                                <th> student name </th>
                                <th>student id </th>
                                <th>department </th>
                                <th> course </th>
                                <th> actions </th>
                            </tr>
                            <?php while($row=mysqli_fetch_assoc($result)) {?>
                            <tr style="border-bottom:1px solid lightgray;" >
                                <td>
                                    <!-- Use Avatar initial generation -->
                                    <div class="std-table-profile">
                                        <?php [$bg,$txt,$nm] = FetchAvatar($conn,$row["Std_id"]) ?>
                                        <div class="Avater" style="background-color:<?php echo $bg; ?>; color:<?php echo $txt; ?>"><?php echo $nm; ?></div>
                                        
                                        <div class="std-table-profile-font">
                                            <!-- STUDENT NAME -->
                                            <h4 style="font-family:arial;font-weight:600; color:#2A313D;"><?= $row["Std_F_name"]." ".$row["Std_L_name"]; ?></h4>
                                            <!-- STUDENT EMAIL -->
                                            <h6><?= $row["Std_email"]; ?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h4><?= $row["Std_id"]; ?></h4>
                                </td>
                                <td>
                                    <h4><?= $row["Applied_dep"]; ?></h4>
                                </td>
                                <td>
                                    <h4><?= $row["Applied_course"]; ?> </h4>
                                </td>
                                <td>
                                    <!-- <a href="">View Profile</a> -->
                                     <button type="button" class="open-modal" data-modal="open-std-profile"
                                      data-id="<?php echo  $row["Std_id"]; ?>"
                                      data-name="<?php echo $row["Std_F_name"]." ".$row["Std_L_name"];?>"
                                      data-email="<?php echo $row["Std_email"];?>"
                                      data-mobile="<?php echo $row["Std_mobile"];?>"
                                      data-address="<?php echo $row["Std_address"];?>"
                                      data-department="<?php echo $row["Applied_dep"];?>"
                                      data-year="<?= date("Y", strtotime($row["B_date"]));?>"
                                     >View Profile </button>

                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>

        <!-- View profile model  -->            <!-- View profile model  -->
        <!-- View profile model  -->            <!-- View profile model  -->
            
            <div class="model-container" id="open-std-profile">
                <div  class="model profile">
                    <div class="profile-hd">
                        <div style="display:flex; align-items:center; flex-direction:row;">
                            <div class="" style="padding-right:10px;">
                                <img src="2.jpg" height="50px" width="50px">    
                            </div>
                            <div class="" style="display:flex; flex-direction:column;">
                                <p id="modal-name"></p>
                                <h5 id="modal-id"></h5>
                            </div>
                        </div>
                        <div class="">
                            <button class="close-modal" >
                                <i class="fa-solid fa-xmark" ></i>
                            </button>
                        </div>
                    </div>
                    <div class="profile-card-cnt" >
                        <div class="" style="flex-direction:column;">
                            <div class="profile-card-1">
                                <h3>contact information</h3>
                                <div class="profile-card-inner">
                                    <div class="profile-card-i">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="" style="display:flex; flex-direction:column;">
                                        <h6>Email Addresss</h6>
                                        <p id="modal-email"></p>
                                    </div>
                                </div>
                                <div  class="profile-card-inner">
                                    <div class="profile-card-i">
                                        <i class="fa-solid fa-square-phone-flip"></i>
                                    </div>
                                    <div  class="" style="display:flex; flex-direction:column;">
                                        <h6>Phone Number</h6>
                                        <p id="modal-mobile"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-card-1" >
                                <h3 style="margin-bottom:0;">acedemic standing</h3>
                                <div  class="" style="display:flex; flex-direction:column; padding:0; margin:0;">
                                    <div class="profile-card-inner card-2" style="flex-direction:column;">
                                        <h6>Department</h6>
                                        <h5 id="modal-department"></h5>
                                    </div>
                                    <div class="profile-card-inner card-2" style="flex-direction:column;">
                                        <h6 >Year</h6>
                                        <h5 id="modal-year"></h5>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="profile-card-3">
                            <h3>Current Address </h3>
                            <p id="modal-address"><p>
                        </div>
                    </div>
                    <div  class="model-btn" style="display:flex; justify-content:space-between;">
                        <div class="">
                            <button class="close-modal" style="background-color:#666;">
                                Cancle
                            </button>
                        </div>
                        <div class="" style="display:flex; flex-direction:row; gap:10px;">
                            <button>
                                <i class="fa-regular fa-eye"></i> View Details
                            </button>
                            <button>
                                <i class="fa-regular fa-pen-to-square"></i> Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
</body>
    <script  src="model.js"></script>
</html>