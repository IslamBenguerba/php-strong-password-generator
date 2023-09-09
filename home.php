<?php
session_start();
$letterePiccole = $_SESSION['homeWord'];
$lettereGrandi = $_SESSION['homeWordBig'];
$ampiezzza = $_SESSION['homeAmpiezza'];
include('functions.php');

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
            
            <div class="card-body">
                <h5 class="card-title">la tua password</h5>
                <p class="card-text">
                    <?php echo($passStrin)
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>