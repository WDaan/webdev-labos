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
    <div class="container ">
        <h1 class="text-center" style="margin: 50px 0px 30px 0px;">Login</h1>
        <?php
        if (!empty($_GET['register']))
            echo '<h5 class="text-center">Registration successful, you can now log in! </h5>';
        ?>
        <?php
        if (!empty($_GET['failed']))
            echo '<h5 class="text-center"> Login failed! </h5>';
        ?>
        <div class="form-group">
            <form method="POST" action="actions/login.php">
                <label for="username">username:</label>
                <input class="form-control" type="text" Name="username" id="username" placeholder="username" required>
                <label for="password">password:</label>
                <input class="form-control" type="password" Name="password" id="password" placeholder="password" required>
                <div class="row" style="margin-top: 20px">
                    <input class="col btn btn-success form-control" type="submit" value="verzenden">
                    <input class="col btn btn-danger form-control" type="reset" value="reset">
                </div>
            </form>
        </div>
    </div>
</body>

</html>