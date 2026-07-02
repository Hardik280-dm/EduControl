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

    function getAvatarColor($name) {
    $avatarColors = [
        ['bg' => '#FDE68A', 'text' => '#92400E'],
        ['bg' => '#BFDBFE', 'text' => '#1E3A8A'],
        ['bg' => '#FBCFE8', 'text' => '#831843'],
        ['bg' => '#BBF7D0', 'text' => '#14532D'],
        ['bg' => '#DDD6FE', 'text' => '#4C1D95'],
        ['bg' => '#FECACA', 'text' => '#7F1D1D'],
        ['bg' => '#A5F3FC', 'text' => '#164E63'],
        ['bg' => '#FED7AA', 'text' => '#7C2D12'],
        ['bg' => '#E9D5FF', 'text' => '#581C87'],
        ['bg' => '#C7D2FE', 'text' => '#312E81'],
    ];

        $charCode = ord($name[0]); // PHP mein ASCII code nikalne ka function
        $index = $charCode % count($avatarColors);
        $color = $avatarColors[$index];

        
        $avatar_bg = $color['bg'];
        $avatar_text = $color['text'];

        return [$avatar_bg,$avatar_text];
    }

    function avater_colors($id,$conn,$table,$bg,$txt,$initial){

        $query = "INSERT INTO student_meta(student_id,Initial_name,avatar_bg,avatar_text)
        values 
        ('$id','$initial','$bg','$txt')";

        $result = mysqli_query($conn,$query);
    }   

    function FetchAvatar($conn,$id){
        $query = "SELECT * FROM student_meta where student_id=$id";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);

        return[$row["avatar_bg"],$row["avatar_text"],$row["Initial_name"]];
    }

?> 


