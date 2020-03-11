<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container text-center mt-5">
        <?php
        session_start();
        $auth = $_SESSION["auth"] ?? '';

        if (!empty($auth)) {
            echo '<h1 style="text-align:center; margin: 50px 0px 30px 0px;">Welcome</h1>
                    <div>
                    Very secret information!
                    </div>
                    <div class="mt-5">
                    <a href="beveiligdlogout.php">
                        <input class="col btn btn-danger form-control mt-1" value="Logout">
                    </a></div>';
        }
        else {
            echo '<h3> You are not logged in! </h3>
                    <a href="beveiligdindex.php">
                        <input class="col btn btn-danger form-control mt-5" value="Back">
                    </a>';
        }
        ?>

    </div>
</body>

</html>