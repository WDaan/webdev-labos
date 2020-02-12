<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zenderPost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 style="text-align:center; margin: 50px 0px 30px 0px;">Formulier:</h1>
        <div class="form-group">
            <form method="post" action=3.2.php>
                <label for="sensorID">sensorID:</label>
                <input class="form-control" min="0" max="1023" type="number" Name="sensorID" id="sensorID" placeholder="sensorID" required>
                <label for="co2Value">co2Value:</label>
                <input class="form-control" min="450" max="2000" type="number" Name="co2Value" id="co2Value" placeholder="co2Value" required>
                <label for="humidityValue">humidityValue:</label>
                <input class="form-control" min="0" max="100" type="number" Name="humidityValue" id="humidityValue" placeholder="humidityValue">
                <div class="row" style="margin-top: 20px">
                    <input class="col btn btn-success form-control" type="submit" value="verzenden">
                    <input class="col btn btn-danger form-control" type="reset" value="reset">
                </div>
            </form>
        </div>
    </div>
</body>

</html>