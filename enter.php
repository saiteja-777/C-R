<?php
include("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
.formw input{
    padding: 5px 15px;
    border: 1px solid white;
    background-color: black;
    color: white;
    align-items: center;
    margin-top: 10px;
    margin-bottom: 10px;
}
.formw input:hover{
    box-shadow: 0px 0px 10px  aqua;
}
.formw label{
    color: yellow;
   
}

body{
    background-color: rgb(43, 42, 42);
    background-image: url('bg.jpg');
    background-size: cover;
    background-position: center;
}
.formw{
    background-color: black;
    background-image: url('jh.jpeg');
    background-image: repeating-linear-gradient(#000,,url('jh.jpeg'));
    background-size: cover;
    background-position: center;
    width: 190px;
    padding: 60px;
    padding-top:30px;
    align-items: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    box-shadow: 0px 0px 15px  orange;
    transition: .4s;
    border-radius: 15px;
}
.formw:hover{
    box-shadow: 0px 0px 15px  rgb(0, 239, 0);
}
.btn1:hover{
    background-color: white;
    color: black;
    cursor: pointer;
}
.btn2:hover{
    background-color: white;
    color: black;
    cursor: pointer;
}
.btn2{
    margin-left: 20px;
}

    </style>
</head>
<body>

<div class="formw">

    <form action="save.php" method="post">
        <h2 style="text-align:center; color:white;">Student data</h2>
<label>Name</label><br>
<input type="text" placeholder="Enter your Name" required name="fname"><br>
<label>Email</label><br>
<input type="email" placeholder="Enter your Email" required name="email"><br>
<label>Mobile Number</label><br>
<input type="text" placeholder="Enter your Mobile Number" required name="mobile"><br>
<label>ID</label><br>
<input type="text" placeholder="Enter your Id" required name="idn"><br>
<input type="Submit" class="btn1"><input type="reset" class="btn2">
    </form>

</div>
    
</body>
</html>