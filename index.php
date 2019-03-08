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