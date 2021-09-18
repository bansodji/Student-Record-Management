<?php

include "connection.php";

$fullname = $_POST['s_fullname'];
$age = $_POST['s_age'];
$department = $_POST['s_department'];

$sql = " INSERT INTO `students_data`(`fullname`, `age`, `department`) VALUES ('$fullname', '$age', '$department') ";
if(mysqli_query($con, $sql)){
    echo 1;
}else{
    echo 0;
}

?>