<?php
    // print_r($_POST);
    if(isset($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['date'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $job_possition = $_POST['job'];

        echo'<br>';
        echo 'Name: '.$name;
        echo '<br>';
        echo 'Email: '.$email;
        echo '<br>';
        echo 'DOB: '.$dob;
        echo'<br>';
        echo 'Phone: '.$phone;
        echo'<br>';
        echo 'Gender: '.$gender;
        echo'<br>';
        echo 'Job Possition: '.$job_possition;
    }
?>