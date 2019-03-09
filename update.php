<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/main.css">
    <title>Update Page</title>
</head>

<body>

    <?php
        include "connect.php";
        include "nav-bar.php";
        include "main.php";
    ?>

    <div class="container">
        <div class="page-header">
            <h1>Records to Update</h1>
        </div>

        <div id="update">
            <form action="" method="post">
                <label> Transfers book wanting to read to the book's already read:</label>
                <input type="text" name="read_update">
                <input type="submit" value="READ" class='submit'>
            </form>
        </div>




    </div>

    <?php include "footer.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>