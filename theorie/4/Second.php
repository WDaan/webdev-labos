<?php
session_start();
$_SESSION["LANGUAGE"];
$_SESSION["NumberOfVisitors"] = $_SESSION["NumberOfVisitors"] + "1";
if (!empty($_GET["Language"])) {
    $_SESSION["LANGUAGE"] = $_GET["Language"];
}

$data = [
    "goto" => null,
    "title" => null,
    "second" => null,
    "visitor" => null
];

if ($_SESSION["LANGUAGE"] == "be") {
    $data["title"] = "2de Pagina";
    $data["goto"] = "Ga naar";
    $data["page"] = "de 3de pagina";
    $data["visitor"] = "Aantal bezoekers";
} else if ($_SESSION["LANGUAGE"] == "en") {
    $data["title"] = "2nd Page";
    $data["goto"] = "Go to";
    $data["page"] = "the 3rd page";
    $data["visitor"] = "Number of visitors";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $data["title"] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 style="text-align:center; margin: 50px 0px 30px 0px;"><?php echo $data["title"] ?></h1>
        <div class="card">
            <div class="row" style="padding: 20px;">
                <div class="col-6">
                    <?php echo $data["goto"] ?> <a href="Index.php" target="_self"> Home</a>
                </div>
                <div class="col-6">
                    <?php echo $data["goto"] ?> <a href="Third.php" target="_self"> <?php echo $data["page"] ?></a>
                </div>
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