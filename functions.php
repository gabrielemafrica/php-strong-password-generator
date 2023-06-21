<?php

// prelevo i dati con get

$passLength = $_GET['passLength'];
$repeat = $_GET['reepeat'];
$letters = $_GET['lettersR'];
$numbers = $_GET['numbersR'];
$symbols = $_GET['symbolsR'];



//finzioni



function generaPassword($lunghezza){
    
    // caratteri
    $caratteriMinuscoli = 'abcdefghijklmnopqrstuvwxyz';
    $caratteriMaiuscoli = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()_+-=';
    
    $tuttiCaratteri = $caratteriMinuscoli . $caratteriMaiuscoli . $numeri . $simboli;
    
    $password = '';

    //genero password

    for ($i = 0; $i < $lunghezza; $i++) {
        $carattereCasuale = $tuttiCaratteri[random_int(0, strlen($tuttiCaratteri) - 1)];
        $password .= $carattereCasuale;
    }
    return $password;
}
