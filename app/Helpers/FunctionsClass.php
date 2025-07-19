<?php
namespace App\Helpers;

class FunctionsClass{

     public static function getRandomFiveDigitNumber() {
        return rand(10000, 99999); // Genera un número entre 10000 y 99999 (exactamente 5 caracteres)
    }

    
}
