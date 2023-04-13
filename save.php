<?php
include("db.php");

$firstname = $_POST['fname'];
$email = $_POST['email'];
$mobilen = $_POST['mobile'];
$idn = $_POST['idn'];


$query = "INSERT INTO `saving` (`fname`, `email`, `mobile`, `id`) VALUES ('$firstname', '$email', '$mobilen', '$idn')";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved</title>
    <style>
        .duh{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            align-items: center;
        }
#gug{
    padding: 10px 25px;
            background-color: white;
            border-radius: 30px;
            text-align: center;
            color: black;
            font-size: 15px;
            margin-left: 30px;
            text-decoration: none;
            border: 2px solid black;
}
    </style>
</head>
<body>
    

    <div class="duh">

        <h1><?php
if($conn->query($query)===TRUE){
    echo "Data Entered Succesfully";
}
?></h1>
     <a id="gug" href="index.php">Go Back</a>
    </div>
</body>
</html>