<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OntvangerGet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 style="margin: 50px 0px 30px 0px;">Informatie:</h1>

        <?php

        isset($_GET["Voornaam"]) ?  $voornaam = $_GET["Voornaam"] : $voornaam = "";
        isset($_GET["Achternaam"]) ?  $achternaam = $_GET["Achternaam"] : $achternaam = "";
        isset($_GET["Studentnummer"]) ?  $nr = $_GET["Studentnummer"] : $nr = "";
        isset($_GET["E-mailadres"]) ?  $email = $_GET["E-mailadres"] : $email = "";

        echo !empty($voornaam) ? "<div> Voornaam: {$voornaam} </div>" : "<div> Gelieve uw voornaam in te vullen.</div>";
        echo !empty($achternaam) ? "<div> Achternaam: {$achternaam} </div>" : "<div> Gelieve uw achternaam in te vullen.</div>";
        echo !empty($nr) ? "<div> Studentnummer: {$nr} </div>" : "<div> Gelieve uw studentnummer in te vullen.</div>";
        echo !empty($email) ? "<div> Email: {$email} </div>" : "<div> Gelieve uw email in te vullen.</div>";

        ?>
    </div>
</body>

</html>