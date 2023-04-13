<?php
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter data</title>
<style>
    .btn{
        padding: 10px 25px;
        background-color: black;
        color: white;
        font-size: 15px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px orange;
        margin: 30px;
        text-decoration: none;

    }
    .center{
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }

</style>
</head>
<body>
    <div class="center">
        <a href="enter.php" class="btn">Enter data</a>
        <a href="view.php" class="btn">View data</a>
    </div>
</body>
</html>