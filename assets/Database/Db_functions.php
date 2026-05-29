<?php

    // include "../assets/Database/Connection.php";
    // $db1 = new Database();

    function Recent_activity($conn,$limit = 999){

        $query = " (SELECT Std_F_name AS first_name, Std_L_name AS last_name,
Applied_course AS course, Profile_photo, updated_at AS activity_time, 'Student' AS type 
FROM students
ORDER BY updated_at DESC LIMIT 3)

UNION ALL

(SELECT Fac_F_name, Fac_L_name,
Applied_course AS course, Profile_photo, updated_at AS activity_time, 'Teacher' AS type 
FROM faculty
ORDER BY updated_at DESC LIMIT 3)

ORDER BY activity_time DESC LIMIT $limit";

        // $conn = $db1->conn;

        return mysqli_query($conn,$query);
    }
?>