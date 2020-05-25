<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location:index.html");
    exit();
}
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.html");
    exit;
}
?>

<html>
    <head>
        <style>
            
            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            }

            .title {
            color: grey;
            font-size: 18px;
            }

            button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #4CAF50;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            }

            a {
            text-decoration: none;
            font-size: 22px;
            color: white;
            }

            button:hover, a:hover {
            opacity: 0.7;
            }            
        </style>
    </head>
    <body>
       
        <div class="card">
            <img src=<?php echo $_SESSION['avatar'];?> alt="Profile" style="width:100%">
            <h1 style = " color: #4CAF50;"><?php echo $_SESSION['username'];?>  <?php echo $_SESSION['usersurname'];?></h1>
            <p class="title"><?php echo $_SESSION['email'];?></p>
            <p class="title"><?php echo $_SESSION['phone'];?></p>
            <p><button><a href="index.html">Logout</a></button></p>
        </div>
    </body>
</html>