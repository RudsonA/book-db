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

    <form action="" method="post">
        <label>Insert the ID of read books you wish to delete:</label>
        <input type="text" name="readID">
        <input type="submit" value="Read DELETE">
    </form>

    <form action="" method="post">
        <label>Insert the ID of wish books you want to delete:</label>
        <input type="text" name="wishID">
        <input type="submit" value="Read DELETE">
    </form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>