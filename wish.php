<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/main.css">
    <title>I wish to read</title>
</head>

<body>
    <?php
        include "connect.php";
        include "nav-bar.php";
        include "main.php";
    ?>

    <div class="container">

        <div class="page-header">
            <h1>Books on Queue</h1>
        </div>

        <div id="wish">
            <form action="" method="post">
                <input type="text" name="wish_to_read" id="wish_to_read" placeholder="Enter books you like">
                <input type="text" name="wish_author" placeholder="Enter the author's name">
                <input type="text" name="wish_des" placeholder="Why you want to read it?">
                <input type="submit" value="Submit" class="submit">
            </form>
        </div>

        <br>

        <div class="tables">
            <table class="Table">
                <tr>
                    <thead>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Description</th>
                    </thead>
                </tr>
                <?php
                    foreach ($booksW as $w) {
                        echo "<tr>";
                        echo "<td>" . $w['id'] . "</td>"; 
                        echo "<td>" . $w['book_name'] . "</td>"; 
                        echo "<td>" . $w['author'] . "</td>"; 
                        echo "<td>" . $w['descriptions'] . "</td>"; 
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>

    <?php include "footer.php"; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>