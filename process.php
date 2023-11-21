<?php
// Riceve i valori del form e li assegna alle variabili
$paragraph = $_POST["paragraph"];

$paragraph_length = strlen($paragraph);

$badword = $_POST["badword"];

// Sostituisce il valore di $badword con *** nella variabile $paragraph e lo assegna alla variabile $censured_par
$censured_paragraph = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
            <div>
                <!-- Stampa i valori in pagina -->
                <h1>Original text:</h1>
                <p><?php echo $paragraph ?></p>
                <h6><?php echo "The submitted text contains $paragraph_length characters." ?></h6>
                <h1>Censored text:</h1>
                <p><?php echo $censured_paragraph ?></p>
                <a href="index.php">Back</a>
            </div>
        </div>
    </div>
</body>