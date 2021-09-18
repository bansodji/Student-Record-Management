<?php

    include "connection.php";

    $sql = " SELECT * FROM `students_data` ";
    $result = mysqli_query($con, $sql);
    $output = "";

    if(mysqli_num_rows($result) > 0){
        $output = '
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Department</th>
                                <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                ';

                while($row = mysqli_fetch_assoc($result)){
                    $output .= "
                                    <tr>
                                        <th scope='row'>{$row["id"]}</th>
                                        <td>{$row["fullname"]}</td>
                                        <td>{$row["age"]}</td>
                                        <td>{$row["department"]}</td>
                                        <td><i id='edit-btn' data-eid='{$row["id"]}' class='bi bi-pencil-square fs-5 text-success me-5'></i> <i id='delete-btn' data-id='{$row["id"]}' class='bi bi-trash fs-5 text-danger'></i></td>
                                    </tr>
                                ";
                }

                $output .= '
                            </tbody>
                            </table>    
                        ';

        echo $output;
        mysqli_close($con);

    }else{
        echo "<h2>No Record Found.</h2>";
    }

?>