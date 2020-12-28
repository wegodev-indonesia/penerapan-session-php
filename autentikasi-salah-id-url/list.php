<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="#" class="active">list</a>
                <a href="konten.php?user_id=<?= $_GET['user_id']; ?>">konten</a>
                <a href="profil.php?user_id=<?= $_GET['user_id']; ?>">profil</a>
            </nav>
            
            <div class="content">
                <?php
                    //menulis html di dalam php
                    // if(isset($_GET['user_id'])){
                    //     echo "halaman list";
                    // }
                ?>

                <?php if(isset($_GET['user_id'])): ?>
                    <p>Halaman list</p>
                <?php else: ?>    
                    <p class="danger">Anda tidak dapat menagkses halaman ini</p>
                    <a href="login.php" class="btn-login">Login</a>
                <?php endif; ?>
            </div>

        </div>
    </body>
</html>    