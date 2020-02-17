<?php
include_once 'connect.php';
$database = new connect();
global $db;
$db = $database->openConnection();
function processDrpdown($selectedVal) {
    $data = $selectedVal;
    $sql_check = "select count(*) as total from `register` where program = '$data'";
    global $db;
    $record = $db->query($sql_check);
    $result = $record->fetchAll();
    $data = $result[0]['total'];
    $data = 120 - $data;
    echo $data;
}    

if ($_POST['dropdownValue']){
    //call the function or execute the code
    processDrpdown($_POST['dropdownValue']);
}
?>