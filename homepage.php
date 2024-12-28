<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6e7a88, #f1f1f1);
            color: #333;
            margin: 0;
            padding: 0;
           background-image: url("https://static.nike.com/a/images/f_auto,cs_srgb/w_1536,c_limit/4d69ec34-b055-42fa-8c59-051f6df77bca/nike-easyon-–-adaptive-shoes-for-every-body.png");
           background-size: no repeat;
        }
        .container {
            text-align: center;
            padding: 15% 10%;
        }
        .welcome-text {
            font-size: 3em;
            font-weight: bold;
            color: #fff;
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.1em;
            margin-top: 20px;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .button:hover {
            background-color: #218838;
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.2);
        }
        .button-logout {
            background-color: #dc3545;
        }
        .button-logout:hover {
            background-color: #c82333;
        }
        .footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 0.9em;
            background-color: rgba(2, 2, 2, 0.5);
            width: 500px;
            margin-left:500px;
            border-radius:35px;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="welcome-text">
            Hello, 
            <?php 
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row = mysqli_fetch_array($query)){
                    echo $row['firstName'] . ' ' . $row['lastName'];
                }
            }
            ?> Welcome.
        </p>
        <a href="index.html" class="button">Home</a>
        <a href="logout.php" class="button button-logout">Logout</a>
    </div>
    <div class="footer">
        <p>&copy; 2024 Abdullah, Taher & Mihad. All rights reserved.</p>
    </div>
</body>
</html>
