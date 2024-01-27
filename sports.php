
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locol News</title>
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
    body{
        background-color:black;
        color:white;
    }
    img{
        height:100px;
        width:200px;
        float:right;
        padding-top: 10px;
        padding-left: 5px;
        padding-right: 2px;
    }
    .align{
        width: 100%;
        background-image: linear-gradient(to right,#00DBDE,#FC00FF);
        font-size: 1rem;
        box-shadow: 0px 8px 18px white;
        border-radius: 0.5rem;
        text-align: justify;
        padding-left:5px;
        padding-right:3px;
        padding-bottom:3px;
    }
    .align1{
        width: 100%;
        background-image: linear-gradient(to right,#00DBDE,#FC00FF);
        font-size: 1rem;
        box-shadow: 0px 8px 18px white;
        border-radius: 0.5rem;
        text-align: justify;
        color:white;
        padding-left:5px;
        padding-right:3px;
        padding-bottom:3px;
    }
    footer{
        height: 3rem;
        width:100%;
        text-align: center;
        background-color: ivory;
        color: black;
        padding-top: 2px;
        border-radius: 0.5rem;
    }
    nav{
        padding-top:20px;
        padding-left:10px;
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
        <a href="sports.php" class="ac">Sports News</a>
        <a href="Tech.php">Tech News</a>
        <a href="articles.php">articles</a>
        <a href="profile.html">profile</a>
        </nav>
    </header>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbs";
$conn = new mysqli($servername,$username, $password, $dbname);
$query = "SELECT * FROM upload where type='sports'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<br>';
        echo "<div class='align1'>";
            if($row["url"]!="")
            {
            echo"<img align='right' alt='image' src='" . $row["url"]. "'";
            echo '<br>';
            echo "<h1 style='font-size:30px;'>".$row['heading']."</h1>";
            echo "<p>" . $row["para"] . "</p>";
            }
            else
            {
                echo "<h1 style='font-size:30px;'>".$row['heading']."</h1>";
                echo "<p>" . $row["para"] . "</p>";  
            }

        echo "</div>";
    }
}
$conn->close();
?>
    <br>
    <footer>
            <p>Copyright &copy; 2023 Saila Reddy Putcha</p>
    </footer>
</body>
</html>