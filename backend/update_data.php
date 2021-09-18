<?php

    include "connection.php";

    $stu_id = $_POST['id'];
    $stu_fullname = $_POST['fullname'];
    $stu_age = $_POST['age'];
    $stu_department = $_POST['department'];

    $sql = " UPDATE `students_data` SET `fullname` = '{$stu_fullname}', `age` = '{$stu_age}', `department` = '{$stu_department}' WHERE `id` = {$stu_id} ";
    
    if(mysqli_query($con, $sql)){
        echo 1;
    }else{
        echo 0;
    }

?>