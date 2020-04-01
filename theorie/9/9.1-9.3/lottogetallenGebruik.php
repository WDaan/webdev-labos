<?php
    include("lottoKlasse.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mijn eerste PHP OOP pagina</title>
		<meta charset="UTF-8" />
	</head>
	
	<body>
        <h1>Gebruik van een klasse in PHP</h1>
        <div>
            <?php
                // Maak een object en toon de data.
                $mijnLottogetallen = new Lottogetallen();
                $mijnLottogetallen->GenereerLottogetallen();
                $mijnLottogetallen->ToonLottogetallen();                
            ?>
        </div>
	</body>
</html>