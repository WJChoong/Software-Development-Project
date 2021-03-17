<?php
session_start();
// if they clicked on the submit button
if (isset($_POST["submit"])){ 
    //connect to database
    require "../../conn.php"; 

    // store data
    $module = $_POST["module"];
    $group = $_POST["group"];
    $time = $_POST["time"];
    $date = $_POST["date"];

    $sql = "INSERT INTO timetable (
                                    time_date,
                                    time_time ,
                                    time_group,
                                    module_id
                                    )
            VALUES (
                    '$date',
                    '$time',
                    '$group',
                    '$module'
                );";
    
    //check whether the profile is successfully created
    if ($link->query($sql) === TRUE) {
        header("Location: ../interface/Create-Class.php?status=success");
    } else {
        echo("Error description: " . $link -> error);
        header("Location: ..inteface/Create-Class.php?status=failed");
    }
} 
else {
    header("Location: ../interface/MainPage.php");
    exit();
}
?>