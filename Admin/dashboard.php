<?php
    include "sidebar.php";
    include "../assets/Database/Connection.php";
    include "../assets/Database/Db_functions.php";
    
    
    $db = new Database();
    $Faculty= $db->Select_faculty();
    $Student= $db->Select_students();
    $query = Recent_activity($db->conn);
    $conn = $db->conn;
    ?>

<html>
        <link rel="stylesheet" href="../assets/css/admin.css">

    <body>
    <form  method="post">        
        <div class="main-wrapper">
            <?php include "header.php";?>

            <!-- DashBoard Heading Container-1 -->
 
            <div class="dashboard-heading-wrapper">
                <div class="dashboard-heading">
                    <h1>Academic Dashboard </h1>
                    <h3>Real-time overview of college administrative status</h3>
                </div>
                    <div class="dashboard-heading-btn">
                        <button type="button" class="open-modal" data-modal="open-notice">
                            <span style="font-size:20px; margin-left:10px; margin-right:2px;">+</span>
                            New Entry
                       </button>
                    </div>
            </div>
            
            <!-- Notice Module Of Dashboard -->

                <div class="model-container " id="open-notice">
                    <div class="model news">
                        <div style="" class="news-h">
                            <p style="margin:0; padding:0;">Add New Notice</p>
                            <button id="close" class="close-modal">
                                <i class="fa-solid fa-xmark" ></i>
                            </button>
                        </div>
                        <div class="news-inner">
                            <p>Title</p>
                            <input type="text" placeholder="e.g., Campus Maintenance Advisory">
                            <div class="" style="display:flex; justify-content:space-between;">
                                <div class="" >
                                    <p style="padding-bottom:10px;">Notice Date</p>
                                    <input 
                                    type="date"
                                    id="noticeDate"
                                    class="date-input"
                                    >
                                </div>
                                <div class="notice-drop">
                                    <p style="padding-bottom:10px;">Priority/Category</p>
                                    <select>
                                        <option> General Information </option>
                                        <option> Acedemic </option>
                                        <option>Faculty </option>
                                    </select>
                                </div>
                            </div>
                            <p>Discription</p>
                            <textarea rows="12" cols="45" placeholder="Enter the full details of the notice here..."></textarea>
                        </div>
                            <div class="model-btn">
                                <button type="reset">Cancle</button>
                                <button type="submit">
                                <i class="fa-regular fa-paper-plane" ></i>    
                                Post Notice
                                </button>
                            </div>
                    </div>
                </div>
            <!-- DashBoard Heading Container-2 -->
        
            <div class="dashboard-container-wrapper">
                <div class="dashboard-container">
                    <div class="dashboard-cnt-2">
                        <div style="display:flex; align-items:center; gap:10px;">
                            <i class="fa-solid fa-graduation-cap" style="margin-top:10px;"></i>        
                            <h3>total student </h3>
                        </div>
                        <h1><?= mysqli_num_rows($Student); ?></h1>
                        <h4> Across all acedemic departments</h4>
                    </div>
                    <div class="dashboard-cnt-img">
                        <img src="img.jpg" height="130px" width="180px" style="border-radius:10px; ">
                    </div>
                </div>         
                <div class="dashboard-container">
                    <div class="dashboard-cnt-2">
                        <div style="display:flex; align-items:center; gap:10px;">
                            <i style="margin-top:10px;" class="fa-solid fa-user-group"></i>
                            <h3>total faculty </h3>
                        </div>
                        <h1><?= mysqli_num_rows($Faculty); ?></h1>
                        <h4> Across all acedemic departments</h4>
                    </div>
                    <div class="dashboard-cnt-img">
                        <img src="img.jpg" height="130px" width="180px" style="border-radius:10px; ">
                    </div>
                </div>
            </div>

            <!-- Main DashBoard Container (Activity) -->

            <div class="dashboard-activity-container " id="view-log">
                <div class="dashboard-activity-hd-cnt">
                    <h1>Recent Administrative Activity</h1>
                    <div class="flex-container-rw">
                        <button type="button" class="open-modal view-log" data-modal="view-log"   style="background-color:white; border:none;">
                            View all Log
                        </button>
                        <button type="button" class="close-modal" style="background-color:white; border:none;"><i class="fa-solid fa-arrow-up"></i></button>
                    </div>
                </div>
                <?php while($result  = mysqli_fetch_assoc($query)) { ?>
                    <div class="dashboard-activity-notice">
                        <?php if($result['type'] == 'Student') {?> 
                            <img src="img.jpg" height="30px" width="40px" style="margin:10px; " >
                            <div class="dashboard-activity-notice-cnt">
                                <h2>New student registration:<?= $result['first_name']; ?></h2>
                                <h4>Applied for <?= $result['course'];?>, Registered on: <?= date('d M Y',strtotime($result['activity_time'])); ?> Documents verified by admissions</h4>
                            </div>
                        <?php }else if ($result['type'] == 'Teacher') {?>
                            <img src="img.jpg" height="30px" width="40px" style="margin:10px; " >
                            <div class="dashboard-activity-notice-cnt">
                                <h2>New Faculty registration:<?= $result['first_name']; ?></h2>
                                <h4>Applied for <?= $result['course'];?> as <?= $result['type']; ?>,Registered on: <?= date('d M Y',strtotime($result['activity_time'])); ?> Documents verified by admissions</h4>
                            </div>
                        <?php } ?>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </form>
</body>
        <style>
            .dashboard-activity-container.show{
            height:1000px;
            overflow:auto;
            scrollbar-width:10px; 
        }
        </style>
        <script  src="model.js"></script>
</html>