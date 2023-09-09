<?php
session_start();
$ampiezzza = $_GET['rangePW'];
$lettereGrandi = $_GET['lettereBig'];
$letterePiccole = $_GET['lettereSmall'];
$_SESSION['homeWord'] = $letterePiccole;
$_SESSION['homeWordBig'] = $lettereGrandi;
$_SESSION['homeAmpiezza'] = $ampiezzza;

if(isset($lettereGrandi) || isset($lettereGrandi)){
    header('Location: home.php');
}

// if(isset($lettereGrandi)){
//     echo('esiste');
// }else{
//     echo('non esiste');
// }



// $alfabeto = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
// foreach ($alfabeto as $lettera) {
//     $letteraPiccola = strtolower($lettera);
//     $alfabetoPiccolo[] = $letteraPiccola;
// }
// $pass = [];
// function randomWord($ampiezzza, $alfabeto, $alfabetoPiccolo, $pass)
// {
//     for ($i = 0; $i < $ampiezzza; $i++) {
//         $indice = rand(0, count($alfabeto));
//         echo $indice;
//         if (rand(0, 1) === 1) {
//             $lettera = $alfabeto[$indice];

//             // echo $lettera;
//         } else if (rand(0, 1) === 0) {
//             $lettera = $alfabetoPiccolo[$indice];
//             // echo $lettera;
//         }
//         if ($lettera === null) {
//             $i--;
//         } else {
//             $pass[] = $lettera;
//         }
//     }
//     return $pass;
// }
// function onlySmall($ampiezzza, $alfabeto, $alfabetoPiccolo, $pass)
// {
//     for ($i = 0; $i < $ampiezzza; $i++) {
//         $indice = rand(0, count($alfabeto));
//         echo $indice;
//         if (rand(0, 1) === 1) {
//             $lettera = rand(0, 10);
//             // echo $lettera;
//         } else if (rand(0, 1) === 0) {
//             $lettera = $alfabetoPiccolo[$indice];
//             // echo $lettera;
//         }
//         if ($lettera === null) {
//             $i--;
//         } else {
//             $pass[] = $lettera;
//         }
//     }
//     return $pass;
// }
// function onlyBig($ampiezzza, $alfabeto, $pass)
// {
//     for ($i = 0; $i < $ampiezzza; $i++) {
//         $indice = rand(0, count($alfabeto));
//         echo $indice;
//         if (rand(0, 1) === 1) {
//             $lettera = $alfabeto[$indice];
//             // echo $lettera;
//         } else if (rand(0, 1) === 0) {
//             $lettera = rand(0, 10);
//             // echo $lettera;
//         }
//         if ($lettera === null) {
//             $i--;
//         } else {
//             $pass[] = $lettera;
//         }
//     }
//     return $pass;
// }
// //Inizio il controllo dei dati 
// if (isset($lettereGrandi) && isset($letterePiccole)) {
//     $newpass = randomWord($ampiezzza, $alfabeto, $alfabetoPiccolo, $pass);
// } else if (isset($lettereGrandi)) {
//     $newpass = onlyBig($ampiezzza, $alfabeto, $pass);
// } else if (isset($letterePiccole)) {
//     $newpass = onlySmall($ampiezzza, $alfabeto, $alfabetoPiccolo, $pass);
// }else{
//     echo('ciao');
// }

// $passStrin = implode($newpass);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h5 class="card-title">inserisci i dati</h5>
            <div class="card-body">
                <form action=" " method="get">
                    <label for="range">inserisci un valore</label>
                    <input type="range" id="range" name="rangePW" min="6" max="32" value="6">
                    <span id="valueBox">6</span>
                    <input type="checkbox" id="WordB" name="lettereBig">
                    <label for="WordB">Lettere Maiuscole</label>
                    <input type="checkbox" id="WordS" name="lettereSmall">
                    <label for="WordS">Lettere minuscole</label>
                    <button class="btn btn-primary">genera</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="main.js"></script>

</html>