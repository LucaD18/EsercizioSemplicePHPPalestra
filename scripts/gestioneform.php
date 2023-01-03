<html>

<head>
    <title>Palestra FitDent</title>
    <link rel="stylesheet" href="../stylesheets/espalestraden.css">
</head>

<body>
    <div class="navbar">
        <ul>
            <li class="nav"><a class="active" href="../index.html">Home</a></li>
            <li class="nav"><a href="../inostricorsi.html">I nostri corsi</a></li>
            <li class="nav"><a href="../formregistrati.html">Registrati</a></li>

        </ul>
    </div>

    <div class="titolo">
        <h1>Registrazione effettuata!</h1>
    </div>

    <div class="corpo">
        <img src="..\images\check.png" alt="OK" class="check">
        <?php

        $nome = $_POST["Nome"];
        $cognome = $_POST["Cognome"];
        $eta = $_POST["Eta"];
        $genere = $_POST["Genere"];
        $citta = $_POST["citta"];
        $corsi = $_POST["corsi"];
        $prezzi = array("Yoga" => 10, "Pilates" => 40, "Danza" => 35, "Kickboxing" => 60);
        $totcorsi = " ";
        $totalePrezzo = 0;
        for ($i = 0; $i < count($corsi); $i++) {
            $totcorsi = $totcorsi . $corsi[$i] . " ";
            $totalePrezzo = $totalePrezzo + $prezzi[$corsi[$i]];
        }
        echo "<p class='tabella'>Benvenuto " . $nome . " " . $cognome . "!<br>Ti confermiamo che la registrazione è effettuata con successo.<br><br>Ecco i dati inseriti nei nostri sistemi: <br>Eta': " . $eta . "| Genere: " . $genere . "| Residenza: " . $citta . "<br>Corsi scelti:  " . $totcorsi . "<br></p>";
        echo "<br><p class='tabella'>Il totale dei corsi scelti e' di: " . $totalePrezzo . " euro.</p>";
        ?>
        <br>
        <p class="tabella">Clicca <a style="text-decoration: none;" href="../index.html">QUI</a> per tornare alla pagina principale.</p>
    </div>

    <div class="footer">
        <hr>
        <p class="informazioni" style="text-align: center;">Tutti i diritti delle immagini vanno ai rispettivi autori,
            questo sito web e' stato creato per scopi educativi<br>(c) Luca Dentello, 2022-2023</p>
    </div>
</body>

</html>