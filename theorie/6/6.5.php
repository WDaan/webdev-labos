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
    <div class="container">
        <h5>serve with cmd ipv wsl!!!</h5>
        <h1 style="text-align:center; margin: 50px 0px 30px 0px;">Gastenboek:</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>content</th>
                    <th>author</th>
                </tr>
            </thead>
            <tbody>
                <?php //serve with cmd ipv wsl!!!

                $sql = mysqli_connect("localhost", "root", "root", "website")
                    or die("error:" . mysqli_connect_error($sql));

                $result = mysqli_query($sql, "SELECT * FROM messages");

                // overloop de resultaten en zet in de tabel
                while ($record = mysqli_fetch_array($result)) {
                    echo "<tr>
                                <td>" . $record["id"] . "</td>
                                <td>" . $record["title"] . "</td>
                                <td>" . $record["content"] . "</td>
                                <td>" . $record["author"] . "</td>
                            </tr>";
                }
                ?>
            </tbody>
        </table>
        <div style="margin-top: 100px" class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Laat een bericht na
                </h5>
                <div class="form-group">
                    <div class="form-group">
                        <form method="POST">
                            <label for="title">title:</label>
                            <input maxlength="50" class="form-control" type="text" Name="title" id="title" placeholder="title" required>
                            <label for="content">content:</label>
                            <input class="form-control" type="text" Name="content" id="content" placeholder="content" required>
                            <label for="author">author:</label>
                            <input maxlength="50" class="form-control" type="text" Name="author" id="author" placeholder="author" required>
                            <div class="row" style="margin-top: 20px">
                                <input class="col btn btn-success form-control" type="submit" value="verzenden">
                                <input class="col btn btn-danger form-control" type="reset" value="reset">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $title = $_POST["title"] ?? '';
        $content = $_POST["content"] ?? '';
        $author = $_POST["author"] ?? '';

        if (!empty($title) && !empty($content) && !empty($author)) {
            mysqli_query($sql, "INSERT INTO messages (title, content, author) VALUES ('{$title}', '{$content}', '{$author}')");
        }

        ?>
    </div>
</body>

</html>