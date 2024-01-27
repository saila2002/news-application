<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body{
            background-color:black;
            color:white;
        }
        header{
            background-image: linear-gradient(to bottom, red, blue);
            color:white;
            height: 20vh;
            width: 100%;
            font-size: 1.5rem;
            box-shadow: 0px 8px 18px;
            position:sticky;
            border-radius: 0.5rem;
            padding-bottom: 20px;
        }
        .h1{
            font-size: 3rem;
            margin: 0;
            display: inline-block;
            padding-left:42%;
        }
        a{
            color: white;
            margin-left:25px;
            text-decoration: none;
            cursor: pointer;
            border: 2px solid #ccc;
            border-radius: 30px;
            padding: 10px;
            width: 150px;
            background-image: linear-gradient(to bottom, silver, white);
            color: black;
        }
        nav{
            padding-top:20px;
            padding-left:10px;
        }
        .user-options {
            position: fixed;
            top: 40%;
            right: 1rem;
            transform: translateY(-40%);
            display: inline-flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .user-option {
            text-align: center;
            padding: 0.5rem;
            height: 30px;
            width: 60px;
            margin: 0.5rem;
            text-decoration: none;
            color: black;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
            border-radius: 100px;
            cursor: pointer;
            background-color: #fffefe;
            box-shadow: 0 8px 18px rgb(81, 0, 0);
        }
        
        .user-option:hover {
            background-color: #b2c7bc;
            transform: scale(1.05);
            background: linear-gradient(to bottom, #212121, #fff);
            color: black;
        }
        .user-details {
            flex: 1;
        }
        .user-info {
            gap: 1rem;
            padding: 2rem;
            background-image: linear-gradient(to right,#C33764,#1D2671);
            border-radius: 20px;
            border: 1px solid white;
            margin-right: 40%;
            margin-left: 12.5%;
            color:white;

        }
        
        img{
            width: 150px;
            height: 150px;
            border-radius:50%;
            object-fit: cover;
            box-shadow: 0px 5px 10px rgb(255, 255, 254);
        }
        .button{
            height:2rem;
            width:6rem;
            border-width: 4px;
            border-radius: 7px;
            margin-left:180px;
        }
        .button:hover{
            height:2.2rem;
            width:6.3rem;
        }
        input{
            height:2rem;
            width:14rem;
            border-width: 4px;
            border-radius: 7px;
            border-color: black ;
        }
        p{
            color:black;
        }
        a:hover{
            background-color: #b2c7bc;
            transform: scale(1.05);
            background: linear-gradient(to bottom, #212121, #fff);
            color: black;
        }
        .ac{
        background-color: #b2c7bc;
            transform: scale(1.05);
            background: linear-gradient(to bottom, #212121, #fff);
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="h1">Enews</h1>
        <nav>
        <a href="local.php">Local News</a>
        <a href="national.php">National News</a>
        <a href="international.php">International</a>
        <a href="sports.php">Sports News</a>
        <a href="Tech.php">Tech News</a>
        <a href="articles.html">articles</a>
        <a href="profile.html" class="ac">profile</a>
        </nav>
    </header>
    <br>
    <br>
    <section class="user-info">
        <div class="user-details">
        <form method="post">
        <label for="mail" style="font-size:25px;">User name:</label>
        <input type="email" placeholder="Gmail" name="email" style="margin-left: 35px;">
        <br>
        <br>
        <label for=" old_password" style="font-size:25px;">old Password:</label>
        <input type="password" placeholder="old password" name="old" style="margin-left:8px;">
        <br>
        <br>
        <label for="password" style="font-size:25px;">Password:</label>
        <input type="password" placeholder="password" name="password" style="margin-left:43px;">
        <br>
        <br>
        <button type="submit" class="button" name="button">submit</button>
        </form>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbs";
$conn = new mysqli($servername,$username, $password, $dbname);
if(isset($_POST['button']))
{
    $conn = new mysqli($servername,$username, $password, $dbname);
 
    $email = $_POST["email"];
    $password = $_POST["password"];
    $old_password = $_POST["old"];
    $query = "SELECT password FROM enews WHERE email = '$email'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    if ($row['password']==$old_password) 
    {
        $sql = "UPDATE enews SET password='$password' WHERE email = '$email'";
        if ($conn->query($sql) == TRUE) {
            echo "<p>Updated successfully</p>";
        } else {
            echo "<p>Error updating password</p>";
        }
    }
}
?>
        </div>
        <div class="user-options">
            <br>
            <br>
            <a href="edit.php" class="user-option" style="padding-left:12px; padding-right:15px; " class="ac">change password</a>
            <a href="settings.html" class="user-option" style="padding-bottom:0px">Settings</a>
            <a href="help.html" class="user-option" style="padding-bottom:0px">Help</a>
            <a href="admin .html" class="user-option" style="padding-bottom:0px">Logout</a>
        </div>
    </section>
    <br>
</body>
</html>
