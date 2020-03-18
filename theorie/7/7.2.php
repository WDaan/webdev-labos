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
    <style>
        tbody tr:nth-child(odd){
            background-color: lightblue;
        }
        tbody tr:nth-child(even){
            background-color:  lightsalmon;
        }
    </style>
    <div class="container text-center">
        <h5>serve with cmd ipv wsl!!!</h5>
        <table style="border: 1px dotted; margin: 50px auto;">
            <thead style="background-color: lightgrey;">
                <tr>
                    <th>id</th>
                    <th>Afkorting</th>
                    <th>Omschrijving</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php //serve with cmd ipv wsl!!!
                $sql = mysqli_connect("localhost", "root", "root", "website")
                    or die("error:" . mysqli_connect_error($sql));
                $result = mysqli_query($sql, "select * from afkortingen");

                // overloop de resultaten en zet in de tabel
                while ($record = mysqli_fetch_array($result)) {
                    echo "<tr>
                                <td>" . $record["id"] . "</td>
                                <td>" . $record["afkorting"] . "</td>
                                <td>" . $record["omschrijving"] . "</td>
                                <td>" . $record["link"] . "</td>
                            </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>