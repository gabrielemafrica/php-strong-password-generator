<?php
// prelevo i dati con get
$passLength = $_GET['passLength'];

//imposto le variabili su false se non è impostato nulla, altrimenti true


$repeat = isset($_GET['repeat']) ? filter_var($_GET['repeat'], FILTER_VALIDATE_BOOLEAN) : false;
$letters = isset($_GET['lettersR']) ? filter_var($_GET['lettersR'], FILTER_VALIDATE_BOOLEAN) : false;
$numbers = isset($_GET['numbersR']) ? filter_var($_GET['numbersR'], FILTER_VALIDATE_BOOLEAN) : false;
$symbols = isset($_GET['symbolsR']) ? filter_var($_GET['symbolsR'], FILTER_VALIDATE_BOOLEAN) : false;




//finzioni



function generaPassword($passLength, $letters, $numbers, $symbols, $repeat){
    
    // caratteri
    $caratteriMinuscoli = 'abcdefghijklmnopqrstuvwxyz';
    $caratteriMaiuscoli = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()_+-=';

    //compongo la stringa con tutti i caratteri
    $tuttiCaratteri = '';
    // $tuttiCaratteri .= $letters ?? $caratteriMinuscoli . $caratteriMaiuscoli;
    // $tuttiCaratteri .= $numbers ?? $numeri;
    // $tuttiCaratteri .= $symbols ?? $simboli;
    
    if ($letters) {
        $tuttiCaratteri .= $caratteriMinuscoli . $caratteriMaiuscoli;
    }
    
    if ($numbers) {
        $tuttiCaratteri .= $numeri;
    }
    
    if ($symbols) {
        $tuttiCaratteri .= $simboli;
    }

    // $tuttiCaratteri = $caratteriMinuscoli . $caratteriMaiuscoli . $numeri . $simboli;
    
    $password = '';

    //genero password

    for ($i = 0; $i < $passLength; $i++) {
        $carattereCasuale = $tuttiCaratteri[random_int(0, strlen($tuttiCaratteri) - 1)];

        // se non voglio ripetizioni
        if (!$repeat) {
            if (!strpos($password, $carattereCasuale)) {
                $password .= $carattereCasuale;
            }else{
                $i--;
            }
        // se voglio ripetizioni
        }else{
            $password.= $carattereCasuale;
        }
    }
    return $password;
}
