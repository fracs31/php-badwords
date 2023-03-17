<!-- PHP -->
<?php
    $paragraph = $_GET['paragraph']; //paragrafo
    $censure = $_GET['censure']; //parola da censurare
    $lengthParagraph = strlen($paragraph); //lunghezza del paragrafo
    $censured = str_replace($censure, "***", $paragraph); //paragrafo censurato
    $lenghtCensured = strlen($censured); //lunghezza del paragrafo censurato
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Bad Words</title>
</head>
<body>
    <!-- Main -->
    <main>
        <!-- Container -->
        <div class="container">
            <!-- Data -->
            <div class="data">
                <!-- Titolo -->
                <h1>
                    Dati
                </h1>
                <!-- Paragrafo non censurato -->
                <p>
                    Paragrafo non censurato: 
                    <?php echo $paragraph ?>
                </p>
                <!-- Lunghezza paragrafo -->
                <p>
                    Lunghezza paragrafo non censurato: 
                    <?php echo $lengthParagraph ?>
                </p>
                <!-- Paragrafo censurato -->
                <p>
                    Paragrafo censurato: 
                    <?php echo $censured ?>
                </p>
                <!-- Lunghezza paragrafo censurato -->
                <p>
                    Lunghezza paragrafo censurato: 
                    <?php echo $lenghtCensured ?>
                </p>
            </div>
        </div>
    </main>
</body>
</html>