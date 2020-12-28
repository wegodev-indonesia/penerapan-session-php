<?php
    session_start();
    session_destroy();
?>

<html>
    <head>
        <title>Autentikasi</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="list.php">list</a>
                <a href="konten.php">konten</a>
                <a href="profil.php">profil</a>
                <a href="logout.php" class="active">logout</a>
            </nav>
            
            <div class="content">
                <p>Session berhasil dihancurkan</p>
                <a href="login.php" class="btn-login">Login</a>
            </div>

        </div>
    </body>
</html>