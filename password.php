<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <?php include "functions.php"; ?>

    <!-- open session php -->
    <?php session_start() ?>

    <title>Password Is</title>
</head>
<body>


<div class="container mt-5 p-5">
 
    <div class="container text-center mt-5 mb-5">
        <?php
            echo "<h5>" . $_SESSION["password"] . "<h5>";
        ?>
    </div>

    <div class="container d-flex justify-content-center">
    <button type="button" class="btn btn-secondary"><a href="index.php" class="link-light link-offset-2 link-underline-opacity-0">indietro</a></button>
    </div>
    
</div>
    
</body>
</html>