<?php

$alfabeto = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
foreach ($alfabeto as $lettera) {
    $letteraPiccola = strtolower($lettera);
    $alfabetoPiccolo[] = $letteraPiccola;
}
$pass = [];
function randomWord($ampiezzza, $alfabeto, $alfabetoPiccolo, $pass)
{
    for ($i = 0; $i < $ampiezzza; $i++) {
        $indice = rand(0, count($alfabeto));
        // echo $indice;
        if (rand(0, 1) === 1) {
            $lettera = $alfabeto[$indice];
            // echo $lettera;
        } else  {
            $lettera = $alfabetoPiccolo[$indice];
            // echo $lettera;
        }
        if ($lettera === null) {
            $i--;
        } else {
            $pass[] = $lettera;
        }
    }
    return $pass;
}
function onlySmall($ampiezzza, $alfabeto, $alfabetoPiccolo, $pass)
{
    for ($i = 0; $i < $ampiezzza; $i++) {
        $indice = rand(0, count($alfabeto));
        // echo $indice;
        if (rand(0, 1) === 1) {
            $lettera = rand(0, 10);
            // echo $lettera;
        } else  {
            $lettera = $alfabetoPiccolo[$indice];
            // echo $lettera;
        }
        if ($lettera === null) {
            $i--;
        } else {
            $pass[] = $lettera;
        }
    }
    return $pass;
}
function onlyBig($ampiezzza, $alfabeto, $pass)
{
    for ($i = 0; $i < $ampiezzza; $i++) {
        $indice = rand(0, count($alfabeto));
        // echo $indice;
        if (rand(0, 1) === 1) {
            $lettera = $alfabeto[$indice];
            // echo $lettera;
        } else  {
            $lettera = rand(0, 10);
            // echo $lettera;
        }
        if ($lettera === null) {
            $i--;
        } else {
            $pass[] = $lettera;
        }
    }
    return $pass;
}
//Inizio il controllo dei dati 
if (isset($lettereGrandi) && isset($letterePiccole)) {
    $newpass = randomWord($ampiezzza, $alfabeto, $alfabetoPiccolo, $pass);
} else if (isset($lettereGrandi)) {
    $newpass = onlyBig($ampiezzza, $alfabeto, $pass);
} else if (isset($letterePiccole)) {
    $newpass = onlySmall($ampiezzza, $alfabeto, $alfabetoPiccolo, $pass);
} else {
    echo ('ciao');
}

$passStrin = implode($newpass);
?>