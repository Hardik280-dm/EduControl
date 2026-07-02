<link rel="stylesheet" href="../assets/css/admin.css">

<?php 

    include "../assets/Database/Connection.php";
    // include "../assets/Database/Db_functions.php";

    $db = new Database();
    $conn = $db->conn;

    function test_1()
    {
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
        }
    }

     function Initial_avater_generation($conn,$id)
    {

        $query = mysqli_query($conn,"SELECT Fac_F_name,Fac_L_name FROM faculty where Fac_id='$id'");
        $row = mysqli_fetch_assoc($query);

            $First_name = strtoupper($row["Fac_F_name"][0]);
            $Last_name = strtoupper($row["Fac_L_name"][0]);
            $Initial_name = $First_name.$Last_name;
            mysqli_query($conn,"INSERT INTO faculty_meta (id,Initial_name) values ('$id','$Initial_name') ");
    }

    function Insert_record($db,$conn){
        $result = $db->Select_faculty();

        while($row = mysqli_fetch_assoc($result)){

            Initial_avater_generation($conn,$row["Fac_id"]);
        }
    }
    // Insert_record($db,$conn);

    // [$bg,$txt] = avater_colors(3,$conn);
    // echo $bg,$txt;

?>
