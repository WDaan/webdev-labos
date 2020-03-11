<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OntvangerPost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 style="margin: 50px 0px 30px 0px;">Informatie:</h1>
        <?php

        $id = $_POST["sensorID"] ?? '';
        $co2 = $_POST["co2Value"] ?? '';
        $hum = $_POST["humidityValue"] ?? '';
        
        echo !empty($id) ? "<div> sensorID: {$id} </div>" : "<div> Gelieve sensorID in te vullen.</div>";
        echo !empty($co2) ? "<div> co2Value: {$co2} </div> 
        <div class='progress' style='height: 15px;'>
        <div class='progress-bar bg-danger' role='progressbar' style='width:" . $co2 / 2000 * 100 . "%;' aria-valuenow='{$co2}' aria-valuemin='0' aria-valuemax='2000'>
        </div></div>" : "<div> Gelieve co2Value in te vullen.</div>";
        echo !empty($hum) ? "<div> humidityValue: {$hum} </div>
        <div class='progress' style='height: 15px;'>
        <div class='progress-bar bg-info' role='progressbar' style='width:{$hum}%;' aria-valuenow=50 aria-valuemin='0' aria-valuemax='100'>
        </div></div>" : "<div> Gelieve humidityValue in te vullen.</div>";

        ?>
    </div>
</body>

</html>