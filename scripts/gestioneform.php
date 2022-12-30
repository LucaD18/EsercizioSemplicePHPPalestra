<html>

<head>
    <title>Palestra FitDent</title>
    <link rel="stylesheet" href="stylesheets\espalestraden.css">
</head>

<body>
    <div class="navbar">
        <ul>
            <li class="nav"><a class="active" href="index.html">Home</a></li>
            <li class="nav"><a href="inostricorsi.html">I nostri corsi</a></li>
            <li class="nav"><a href="formregistrati.html">Registrati</a></li>

        </ul>
    </div>

    <div class="titolo">
        <h1>Registrazione effettuata!</h1>
    </div>

    <div class="corpo">
        <img src="images\check.png" alt="OK" class="check">
        <?php

        $nome = $_POST["Nome"];
        $cognome = $_POST["Cognome"];
        $eta = $_POST["Eta"];
        $genere = $_POST["Genere"];
        $citta = $_POST["citta"];
        $corsi = $_POST["corsi"];
        echo "<p class='tabella'>Benvenuto: " . $nome . " " . $cognome . "<br>Con dati: " . $eta . " " . $genere . " " . $citta . " " . $corsi . "<br></p>";

        ?>
    </div>

</body>

</html>