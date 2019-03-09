<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/main.css">
    <title>Books Read</title>
</head>
<body>
    <?php
        include "connect.php";
        include "nav-bar.php";
        include "main.php";
    ?>


<div class="container">

    <div class="page-header">
            <h1>Books Read</h1>
        </div>
        
        <form action="" method="post">
            <input type="text" name="read_it" id="read_it" placeholder="Enter books you like">
            <input type="text" name="read_author" placeholder="Enter the author's name">
            <input type="text" name="read_des" placeholder="Thoughts on book">
            <input type="submit" value="Submit" class="submit">
        </form>
        
        <br>
        
        <?php 

        ?>

        <div class="table">
            <table class="Table">
            <thead>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Description</th>
</thead>
            <?php
                foreach ($booksR as $r) {
                    echo "<tr>";
                    // echo "<td>" . $r['id'] . "</td>"; 
                    echo "<td>" . $r['book_name'] . "</td>";
                    echo "<td>" . $r['author'] . "</td>";
                    echo "<td>" . $r['descriptions'] . "</td>";
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