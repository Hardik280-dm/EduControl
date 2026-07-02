
  <!-- <link rel="stylesheet" href="CMS(collage management system)/assets/css/admin.css"> -->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sixtyfour&display=swap" rel="stylesheet">
<form method="POST">
    <div class="admin-H">
        <div class="header-container-2">
            <div class="header-search">
                <input type="text" name="search" placeholder="Search records..." class="admin-T">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>   
            <div class="header-icons">
                <i class="fa-regular fa-bell"></i>
                <i class="fa-solid fa-gear"></i>
            </div>
        </div>
        <div class="admin-H2 open-modal" data-modal="open-profile">
           <div class="profile-cnt" >
                   <img src="Color Combo.png" height="40px" width="40px" class="admin-Img">
                   <div class="admin-profile">Admin Profile</div>
            </div>
        </div>
            <div class="model-container" id="open-profile">
                <div  class="model profile">
                    <div class="profile-hd">
                        <div style="display:flex; align-items:center; flex-direction:row;">
                            <div class="" style="padding-right:10px;">
                                <img src="2.jpg" height="50px" width="50px">    
                            </div>
                            <div class="" style="display:flex; flex-direction:column;">
                                <p>Julianna Deidrich</p>
                                <h5>Admin-Id:1607AD26</h5>
                            </div>
                        </div>
                        <div class="">
                            <button type="button" class="close-modal" >
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
                                        <p>abc@gmail.com</p>
                                    </div>
                                </div>
                                <div  class="profile-card-inner">
                                    <div class="profile-card-i">
                                        <i class="fa-solid fa-square-phone-flip"></i>
                                    </div>
                                    <div  class="" style="display:flex; flex-direction:column;">
                                        <h6>Phone Number</h6>
                                        <p>+91 00000 00000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-card-1" >
                                <h3 style="margin-bottom:0;">acedemic standing</h3>
                                <div  class="" style="display:flex; flex-direction:column; padding:0; margin:0;">
                                    <div class="profile-card-inner card-2" style="flex-direction:column;">
                                        <h6>Department</h6>
                                        <h5>Computer science & AI</h5>
                                    </div>
                                    <div class="profile-card-inner card-2" style="flex-direction:column;">
                                        <h6 >Year</h6>
                                        <h5>2026</h5>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="profile-card-3">
                            <h3>Current Address </h3>
                            <p>North Campus Residence Hall<p>
                        </div>
                    </div>
                    <div  class="model-btn" style="display:flex; justify-content:space-between;">
                        <div class="">
                            <button type="button" class="close-modal" style="background-color:#666;">
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
    </div>
</form>
        <script  src="model.js"></script>
