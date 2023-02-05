<?php

function emptyField($firstName, $lastName, $phoneNumber, $email, $age, $weight, $height, $profession, $diseasesInjuries){
    $result = true;
    if(empty($firstName) || empty($lastName) || empty($phoneNumber) || empty($email) || empty($age) || empty($weight) || empty($height) || empty($profession) || empty($diseasesInjuries)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function invalidEmail($email){
    $result = true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}
