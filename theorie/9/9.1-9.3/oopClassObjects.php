<!DOCTYPE html>
<html>
    <head>
        <title>Eenvoudige PHP Objecten vanuit een klasse</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Zie boek hoofdstuk 29 (p155 e.v.)</h1>
        <?php
            class Dierklasse{
                // Data members declareren. 
                // Merk op: Class properties must be defined as public, private, or protected. 
                // If declared using var, the property will be defined as public. 
                protected $soort;
                var $naam;             
                
                // Constructor voorzien.
                function __construct($pSoort = "NA", $pNaam = "NA")
                {
                    $this->soort = $pSoort;
                    $this->naam = $pNaam;
                } 
                
                // Method. Merk op, $this is hier verplicht, in tegenstelling tot coderen in C#.
                // Merk nog op: Class methods may be defined as public, private, or protected. 
                // Methods declared without any explicit visibility keyword are defined as public.
                function Vertel(){
                    return "De diersoort is '" . $this->soort . 
                    "', de naam is '" . $this->naam . "'.";
                }
                
                // Ook public method die protected variabele aanpast.
                public function WijzigSoort($pSoort){
                    $this->soort = $pSoort;
                }
            }
            
            // Object aanmaken.
            $mijnHuisdier = new Dierklasse();
            echo $mijnHuisdier->Vertel();
            echo "<br>";
            $mijnHuisdier->WijzigSoort("poes");
            $mijnHuisdier->naam = "Minneke";
            echo $mijnHuisdier->Vertel();
            echo "<br>";
        ?>
    </body>
</html>