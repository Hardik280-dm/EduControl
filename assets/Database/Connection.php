<?php 

class Database {

    private $host = "localhost";
    private $db = "CMS";
    private $user = "root";
    private $pass = "";

    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
        
        if($this->conn->connect_error){
            die("Errro:Connection Failed");
        }
    }

    public function add_student($f_name,$l_name,$gender,$b_date,$applied_dep,$applied_c,$fees,
    $father,$mother,$g_occupation,$parent_no,$std_no,$std_email,$std_add,$n_id,$prev_t,$add_p,
    $profile_p){
        $sql = "INSERT INTO students (Std_F_name,Std_L_name,Std_Gender,B_date,	
        Applied_dep,Applied_course,Total_fees,Father_name,Mother_name,Guardian_occ,
        Parent_no,Std_email,Std_mobile,Std_address,National_id,Transcripts,
        Address_proff,Profile_photo) 

        values ('$f_name','$l_name','$gender','$b_date','$applied_dep','$applied_c','$fees',
        '$father','$mother','$g_occupation','$parent_no','$std_no','$std_email','$std_add','$n_id','$prev_t','$add_p',
        '$profile_p')";

        return $this->conn->query($sql);
    }

    public function add_faculty($Profile_photo,$Fac_F_name,$Fac_L_name,$Fac_Gender,$B_date,$Applied_dep,
    $Total_salary,$Father_name,$Mother_name,$Guardian_occ,$Parent_no,$Fac_email,$Fac_mobile,$Fac_address,
    $National_id,$PhD_certificate,$Address_proff,$Joining_Date,$Qualification,$Degrees,$Acedemic_CV,){

        $sql = "INSERT INTO faculty (Profile_photo,Fac_F_name,Fac_L_name,Fac_Gender,B_date,Applied_dep,
        Total_salary,Father_name,Mother_name,Guardian_occ,Parent_no,Fac_email,Fac_mobile,Fac_address,
        National_id,PhD_certificate,Address_proff,Joining_Date,Qualification,Degrees,Acedemic_CV)

        VALUES

        ('$Profile_photo','$Fac_F_name','$Fac_L_name','$Fac_Gender','$B_date','$Applied_dep','
        $Total_salary','$Father_name','$Mother_name','$Guardian_occ','$Parent_no','$Fac_email','$Fac_mobile','$Fac_address','
        $National_id','$PhD_certificate','$Address_proff','$Joining_Date','$Qualification','$Degrees','$Acedemic_CV')";

        return $this->conn->query($sql);
    }

    
    public function Select_students(){
        $sql = "SELECT * FROM students";
        return $this->conn->query($sql);
    }

    public function Select_faculty(){
        $sql = "SELECT * FROM faculty";
        return $this->conn->query($sql);
    }

}