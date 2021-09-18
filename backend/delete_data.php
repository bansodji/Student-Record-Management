<?php

include "connection.php";

$student_id = $_POST['id'];

$sql = " DELETE FROM `students_data` WHERE id={$student_id} ";

if(mysqli_query($con, $sql)){
    echo 1;
}else{
    echo 0;
}

?>