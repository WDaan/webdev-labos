<?php
session_start();
if (!isset($_SESSION["NumberOfVisitors"])) {
    $_SESSION["NumberOfVisitors"] = 0;
} else
    $_SESSION["NumberOfVisitors"] = $_SESSION["NumberOfVisitors"] + "1";

$data = [
    "lang" => "Choose your language",
    "visitor" => "Number of visitors"
];

if ($_SESSION["LANGUAGE"] == "be") {
    $data["lang"] = "Kies je taal";
    $data["visitor"] = "Aantal bezoekers";
} else if ($_SESSION["LANGUAGE"] == "en") {
    $data["lang"] = "Choose your language";
    $data["visitor"] = "Number of visitors";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 style="text-align:center; margin: 50px 0px 30px 0px;">Home:</h1>
        <div class="card" style="padding: 20px">
            <h2> <?php echo $data["lang"] ?></h2>
            <div class="form-group">
                <form Method="GET" action=Second.php>
                    <div class="mt-5 row text-center">
                        <div class="col form-check">
                            <img src="assets/US.png" width="90px">
                            <label for="ENG">ENG</label>
                            <input required type="radio" name="Language" value="en" id="ENG">
                        </div>
                        <div class="col form-check">
                            <img src="assets/BE.jpg" width="90px">
                            <label for="BE">BE</label>
                            <input required type="radio" name="Language" value="be" id="BE">
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <input class="btn btn-success" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center">
            <?php
            echo $data["visitor"] . " : ";
            echo $_SESSION["NumberOfVisitors"];
            ?>
        </div>
    </div>
</body>

</html>