<?php
    if(isset($_POST['button']))
    {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydbs";
    $conn=new mysqli($servername,$username,$password,$dbname);
    $link=$_POST['link'];
    $news=$_POST['news'];
    $type=$_POST['type'];
    $heading=$_POST['heading'];
    if ($conn->connect_error) 
    {
        die("Connection failed: ". $conn->connect_error);
    }
    $sqlquery = "INSERT INTO upload VALUES('$link','$news','$type','$heading')";
    if ($conn->query($sqlquery) === TRUE) 
    {
    echo 'news uploaded';
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
        <style>
        header{
            background-image: linear-gradient(to bottom, red, blue);
            color:white;
            height: 20vh;
            width: 100%;
            font-size: 1.5rem;
            box-shadow: 0px 8px 18px;
            position:sticky;
            border-radius: 0.5rem;
            margin-top:0%;
        }
        h1{
            font-size: 3rem;
            margin: 0;
            display: inline-block;
            margin-top: 5px;
            padding-left:30%;
        }
        body{
            background-color: black;
            color:white;
            font-size: 2rem;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .align{
            margin-top: 130px;
            margin-left: 25%;
            margin-right: 30%;
            padding-top: 20px;
            padding-bottom: 60px;
            padding-left: 100px;
            background-image: linear-gradient(to right,#C33764,#1D2671);
            border-radius: 8px;
        }
        .style{
            height:25px;
            width:200px;
        }
        .style1{
            height:30px;
            width:200px;
            margin-left: 70px;
        }
        .submit{
            height:30px;
            width:80px;
            border-radius:8px;
        }
        .a{
            text-decoration:none;
            color:black;
        }
    </style>
<body>
    <header>
    <h1>Enews web application</h1>
    </header>
    <div class="align">
    <form method="post">
        <label>image link:</label> 
        <input type="text" name="link" class="style">
        <br>
        <label>Heading:</label> 
        <input type="text" name="heading" class="style" style="margin-left:27px">
        <br>
        <label style="margin-top: 20px;">news:</label>
        <textarea name="news" style="margin-top: 10px;" class="style1"></textarea>
        <br>
        <label>newstype:</label> 
        <input type="text" name="type" class="style" style="margin-left:9px">
        <input type='submit' style="margin-left:150px" class="submit" name="button">
        <button class='submit'><a href='admin .html' class="a">logout</a></button>
    </form>
    </div>
</body>
</html>