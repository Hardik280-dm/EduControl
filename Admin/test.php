<?php 

    include "../assets/Database/Connection.php";

    $db = new Database();
    $conn = $db->conn;

    if(isset($_POST["submit"])){
        $db->add_student($_POST["fname"],1,2,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3);
    }

    $query = $db->Select_students();


$query = "SELECT Std_F_name AS first_name, Std_L_name AS last_name, 
                 Profile_photo, created_at, 'Student' AS type
          FROM students
          UNION ALL
          SELECT Fac_F_name, Fac_L_name, 
                 Profile_photo, created_at, 'Teacher' AS type
          FROM faculty
          ORDER BY created_at DESC
          LIMIT 5";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="activity-item">
        <img src="'.$row['Profile_photo'].'" alt="photo">
        <div>
            <p>'.$row['first_name'].' '.$row['last_name'].'</p>
            <span>'.$row['type'].'</span>
            <span>'.date('d M Y', strtotime($row['created_at'])).'</span>
        </div>
    </div>';
} ?>