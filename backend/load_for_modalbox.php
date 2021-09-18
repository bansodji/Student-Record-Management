<?php

    include "connection.php";

    $student_id = $_POST['id'];

    $sql = " SELECT * FROM `students_data` WHERE `id` = '$student_id' ";
    $result = mysqli_query($con, $sql);
    $output = "";

    if(mysqli_num_rows($result)){
       $dataFetch = mysqli_fetch_assoc($result); 
        $output = "
                    <label for='edit-id' class='form-label'>ID</label>
                    <input value='{$dataFetch['id']}' id='edit-id' type='text' class='form-control mb-4'>
                    
                    <label for='edit-fullname' class='form-label'>Fullname</label>
                    <input value='{$dataFetch['fullname']}' id='edit-fullname' type='text' class='form-control mb-4'>
                    
                    <label for='edit-age' class='form-label'>Age</label>
                    <input value='{$dataFetch['age']}' id='edit-age' type='text' class='form-control mb-4'>
                    
                    <label for='edit-department' class='form-label'>Department</label>
                    <input value='{$dataFetch['department']}' id='edit-department' type='text' class='form-control mb-4'>
                ";
        echo $output;
    }else{
        echo "No record Found";
    }

?>