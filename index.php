<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/main.css">
    <title>book Database</title>
</head>

<body>
    <?php include "connect.php"; ?> 
    <?php include "nav-bar.php"; ?>
    <?php include "main.php"; ?>

    <div class="container">
    <!-- <div>  -->
        <!-- <div class="col-md-12"> -->
        <div> 
            <div class="page-header">
                <h1>Book Database</h1>
            </div>
        </div>

        <div id="box">
            <div id="forms">
                <!-- <span id="read">
                    <form action="" method="post">
                        <input type="text" name="read_it" id="read_it" placeholder="Enter the books you've read">
                        <input type="text" name="read_author" placeholder="Enter the author's name">
                        <input type="text" name="read_des" placeholder="Enter your thoughts of the book">
                        <input type="submit" value="Submit">
                    </form>
                </span> -->
                <!-- <div id="wish">
                    <form action="" method="post">
                        <input type="text" name="wish_to_read" id="wish_to_read" placeholder="Enter the books you’d like to read">
                        <input type="text" name="wish_author" placeholder="Enter the author's name">
                        <input type="text" name="wish_des" placeholder="What interests you to read it">
                        <input type="submit" value="Submit">
                    </form>
                </div> -->
            </div>

            <?php include "tables.php"; ?>


        </div>

    </div>

    <?php include "footer.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
<!-- Rud's Reviews 
Blob from mysql-->
</html>