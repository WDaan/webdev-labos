<!DOCTYPE html>
<html>
    <head>
        <title>Eenvoudige PHP Objecten</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Zie boek hoofdstuk 23 (p121 e.v.)</h1>
        <?php
            // Leeg object aanmaken om dan achteraf aan te passen.
            // stdClass is een standaard klasse in PHP.
            $pizza = new stdClass();
            
            // Properties toevoegen aan het object.
            $pizza->bodem = "volkoren";
            $pizza->diameter = 30;
            $pizza->beleg = array("tomaten", "champignons", "ananas", "Gorgonzola");
            $pizza->naam = "Pizza Vives";
            
            // De inhoud aan de gebruiker tonen. Dat kan via een foreach aangezien
            // een object zich min-of-meer gedraagt als een array/key-value pair.
            foreach ($pizza as $key => $value) 
            {
                if( is_object($value) || is_array($value))
                {
                    foreach ($value as $innerKey => $innerValue) {
                        echo 'De $key is: ' . $innerKey . ', de $value is: ' . $innerValue .'.<br>';
                    }
                }
                else
                    echo 'De $key is: ' . $key . ', de $value is: ' . $value .'.<br>';
            }
            echo "<br><br><br><br>";
            
            
            // Je kan ook een array maken van pizza-objecten.
            $pizzas["Gorgonzola"] = $pizza;
            $pizzas["Picolo"] = (object)array(
                "bodem" => "wit",
                "diameter" => 20,
                "beleg" => array("tomaat", "Gouda", "oregano"), 
                "naam" => "Pizzal Picolo"
            );
            
            // Alle pizza's uit het array tonen.
            foreach ($pizzas as $pizzaNaam => $pizza) 
            {
                echo "<h3>".$pizzaNaam."</h3>";
                foreach ($pizza as $key => $value) 
                {
                    if( is_object($value) || is_array($value))
                    {
                        foreach ($value as $innerKey => $innerValue) {
                            echo 'De $key is: ' . $innerKey . ', de $value is: ' . $innerValue .'.<br>';
                        }
                    }
                    else
                        echo 'De $key is: ' . $key . ', de $value is: ' . $value .'.<br>';
                }
                echo "<br><br>";
            }
            echo "<br><br>";
            
            
            // Ter info: je kan ook gewone arrays omzetten naar een object.
            echo "<h3>Drankenlijst</h3>";
            $drankenArray = array(  "drank1" => "water", 
                                    "drank2" => "limonade", 
                                    "drank3" => "bier", 
                                    "drank4" => "wijn",
                                    "drank5" =>  "cola");
            $drankenObject = (object)$drankenArray;
            foreach ($drankenObject as $key => $value) 
            {
                echo 'De $key is: ' . $key . ', de $value is: ' 
                . $drankenObject->$key .'.<br>';        // of $value...
            }
        ?>
    </body>
</html>