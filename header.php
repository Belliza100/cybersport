<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersport</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body> 
    <nav class="header">
        <div class="header_logo">
                        <div>Cybersport</div>
        </div>

        <div class="header_nav">

            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="construct.php">News</a></li>
                <li><a href="construct.php">Forum</a></li>
                <li><a href="construct.php">Bets</a></li>
                <li><a href=<?php if ( $_SESSION["user"] ) { 
                    echo "construct.php"; } else { echo "login.php"; } ?>><?php if ( $_SESSION["user"] ) { 
                    echo "Профиль"; } else { echo "Login"; } ?></a></li>
            </ul>
        </div>
        <img src="./assets/icons/menu.svg" class="header_menu" onclick="toggle('.header_nav')">  
    </nav>

    <script src="./assets/js/main.js"></script>

</body>
</html>