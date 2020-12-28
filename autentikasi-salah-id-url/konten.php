<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="list.php?user_id=<?= $_GET['user_id']; ?>">list</a>
                <a href="#" class="active">konten</a>
                <a href="profil.php?user_id=<?= $_GET['user_id']; ?>">profil</a>
            </nav>
            
            <div class="content">
                <?php if(isset($_GET['user_id'])): ?>
                    <p>Halaman konten</p>
                <?php else: ?>    
                    <p class="danger">Anda tidak dapat menagkses halaman ini</p>
                    <a href="login.php" class="btn-login">Login</a>
                <?php endif; ?>
            </div>

        </div>
    </body>
</html>