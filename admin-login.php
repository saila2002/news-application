<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($email='putchasailareddy02@gmail.com' && $password='psr92002') 
    {
        header("location:upload.php");
    } 
    else {
        echo "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background-color: black;
            color:white;
            font-size: 2rem;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .align{
            margin-left: 30%;
        }
        input{
            height:2rem;
            width:14rem;
            border-width: 4px;
            border-radius: 7px;
            border-color: black ;
        }
        h1{
            font-size: 2.6rem;
            margin:30px;
        }
        button{
            height:2rem;
            width:6rem;
            border-width: 4px;
            border-radius: 7px;
        }
        button:hover{
            cursor:pointer;
        }
        .color{
            background-image: linear-gradient(to right,#43CBFF,#9708CC);
            margin-left:20%;
            margin-right:20%;
            margin-top:10%;
            border: 1px solid white;
            border-radius: 7px;
            border-color: white;
            padding-top:5px;
        }
    </style>
</head>
<body>
    <div class="color">
    <p>  </p>
    <p>  </p>
    <p>  </p>
    <h1 style="margin-left: 43%">Login</h1>
    <div class="align">
    <form method="post">
        <label for="mail">User name:</label>
        <input type="email" placeholder="Gmail" name="email" style="margin-left: 20px;">
        <br>
        <label for="password">Password:</label>
        <input type="password" placeholder="password" name="password" style="margin-left:30px;">
        <br>
        <br>
        <button name="button" style="margin-left: 100px;">login</button>
        <br>
        <br>
    </form>
    </div>
    </div>
</body>
</html>