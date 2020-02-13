<?php
if (isset($_POST["submit"])) {
    include_once 'connect.php';
    // return print(json_encode($_POST));

    $email = $_POST['email'];
    $exp_date = $_POST['exp_date'];
    $fullname = $_POST['fullname'];
    $hospital = $_POST['hospital'];
    $marital_status = $_POST['marital_status'];
    $mobile_no = $_POST['mobile_no'];
    $practice_licence = $_POST['practice_licence'];
    $program = $_POST['program'];
    $sex = $_POST['sex'];
    $speciality = $_POST['speciality'];
    $teller_no = $_POST['teller_no'];
    $title = $_POST['title'];
    $date = date("d M Y");

    $database = new connect();
    
    $db = $database->openConnection();
    $sql_check = "select email, exp_date, fullname, hospital, marital_status, mobile_no, practice_licence, program, sex, speciality, teller_no, title, reg_time
                 from $program where email='$email'";
    
    $record = $db->query($sql_check);
    $result = $record->fetchAll();

    // return print(json_encode($result));

    if (empty($result)) {
        $sql = "insert into $program (email, exp_date, fullname, hospital, marital_status, mobile_no, practice_licence, program, sex, speciality, teller_no, title, reg_time)
             values('$email','$exp_date','$fullname','$hospital','$marital_status','$mobile_no','$practice_licence','$program','$sex','$speciality','$teller_no','$title','$date')";
        
        $db->exec($sql);
        
        $database->closeConnection();

        include_once "printAfterReg.php";
        $printAfterReg= new printAfterReg();
        $printAfterReg::fetchAndPrint($email);
        return;

        return print("You have registered successfully.");
    } else {
        return print("Email already in use.");
    }
}
?>