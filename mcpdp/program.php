<?php
include_once 'connect.php';
$database = new connect();
global $db;
$db = $database->openConnection();
function processDrpdown($selectedVal) {
    $data = $selectedVal;
    $capacity;
    if ($data == 'A105') {
        $capacity = 120;
    }
    if ($data == 'A106') {
        $capacity = 120;
    }
    if ($data == 'B106') {
        $capacity = 30;
    }
    if ($data == 'A107') {
        $capacity = 120;
    }
    if ($data == 'B107') {
        $capacity = 40;
    }
    if ($data == 'A108') {
        $capacity = 120;
    }
    if ($data == 'B108') {
        $capacity = 40;
    }
    if ($data == 'A109') {
        $capacity = 120;
    }
    if ($data == 'A110') {
        $capacity = 120;
    }
    if ($data == 'A111') {
        $capacity = 120;
    }
    if ($data == 'A112') {
        $capacity = 120;
    }
    if ($data == 'B112') {
        $capacity = 30;
    }

    $sql_check = "select count(*) as total from `register` where program = '$data'";
    global $db;
    $record = $db->query($sql_check);
    $result = $record->fetchAll();
    $data = $result[0]['total'];
    $data = $capacity - $data;
    echo $data;
}    

if ($_POST['dropdownValue']){
    //call the function or execute the code
    processDrpdown($_POST['dropdownValue']);
}
?>