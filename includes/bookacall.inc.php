<?php

if(isset($_POST["submit"])){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $profession = $_POST["profession"];
    $diseasesInjuries = $_POST["diseasesInjuries"];

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    if(emptyField($firstName, $lastName, $phoneNumber, $email, $age, $weight, $height, $profession, $diseasesInjuries)){
        header("location: ../bookacall.php?error=emptyfield");
        exit();
    }

    if(invalidEmail($email)){
        header("location: ../bookacall.php?error=invalidemail");
        exit();
    }

    $sql = "INSERT INTO messages (userFirstName, userLastName, userPhoneNumber, userEmail, userAge, userHeight, userWeight, userProfession, userDiseasesInjuries) VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$age', '$height', '$weight', '$profession', '$diseasesInjuries');";
    if($conn->query($sql) === true){
        header("location: ../bookacall.php?error=none");
        exit();
    }
    
}
else{
    header("location: ../bookacall.php");
    exit();
}