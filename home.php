<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css.css">
    <title>Home - New</title>
</head>
<body>
        <?php
            require_once "Head.php";
            require_once "Nav.php";
        ?>

        <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-sm-4">
                <div class="well">
                    <div class="b">
                        Clients
                    </div>
                    <div class="h">
                        <h2>
                            <?php
                                // SQL query to find total count
                                $sql = "SELECT count(*) FROM Clients";
                                $rows = $conn->query($sql);
                                // Display data on web page
                                while($row = mysqli_fetch_array($rows)) {
                                    echo $row['count(*)'];
                                }
                            ?></h2>
                    </div>
                    <div class="h">
                        <a href="Clients.php">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="well">
                    <div class="b">
                        Users
                    </div>
                    <div class="h">
                        <h2>
                            <?php
                                // SQL query to find total count
                                $sql = "SELECT count(*) FROM Users";
                                $rows = $conn->query($sql);
                                // Display data on web page
                                while($row = mysqli_fetch_array($rows)) {
                                    echo $row['count(*)'];
                                }
                            ?>
                        </h2>
                    </div>
                    <div class="h">
                        <a href="Users.php">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="well">
                    <div class="b">
                        Bills and Income
                    </div>
                    <div class="h">
                        <h2>10</h2>
                    </div>
                    <div class="h">
                        <a href="#">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>