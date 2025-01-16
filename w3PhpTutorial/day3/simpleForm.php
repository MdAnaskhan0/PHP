<?php
    // print_r($_POST);
    if(isset($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $skills = implode(', ', $_POST['skills']);
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        echo "<br>";
        echo "\nUser Name: ".ucfirst($name);
        echo "<br>";
        echo "\nUser Email: ".$email;
        echo "<br>";
        echo "\nPassword: ".$password;
        echo "<br>";
        echo "User Skills are: ".$skills;
        echo "<br>";
        echo "Gender: ".ucfirst($gender);
        echo "<br>";
        echo "City: ".ucfirst($city);
    }
?>