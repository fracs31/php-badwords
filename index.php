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
            <!-- Dati -->
            <div class="data">
                <!-- Titolo -->
                <h1 class="title">
                    Form
                </h1>
                <!-- Form -->
                <form class="form" action="./result.php" method="GET">
                    <!-- Etichetta -->
                    <label for="paragraph">Testo</label>
                    <!-- Paragrafo -->
                    <textarea class="input paragraph" name="paragraph" cols="30" rows="10" placeholder="Inserire qui il testo"></textarea>
                    <!-- Etichetta -->
                    <label for="censure">Censura</label>
                    <!-- Parola da censurare -->
                    <input class="input censure" type="text" name="censure" placeholder="Inserire qui la parola da censurare">
                    <!-- Invio -->
                    <input class="btn" type="submit" value="Invio">
                </form>
            </div>
        </div>
    </main>
</body>
</html>