<?php

    session_start();

    include('connection.php');

    $user_id            = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;

    $pdo                = $db->prepare('SELECT * FROM user WHERE id=:user_id');
    $data['user_id']    = $user_id;
                          $pdo->execute($data);

    if($pdo->rowCount()){
        $user = $pdo->fetch(PDO::FETCH_ASSOC);
    }

?>


<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="list.php">list</a>
                <a href="konten.php">konten</a>
                <a href="#" class="active">profil</a>
                <a href="logout.php">logout</a>
            </nav>
            
            <div class="content">
                <?php if($user_id): ?>
                    <p>User ID : <?= $user['id'] ?></p>
                    <p>Name : <?php echo $user['name'] ?></p>
                <?php else: ?>    
                    <p class="danger">Anda tidak dapat menagkses halaman ini</p>
                    <a href="login.php" class="btn-login">Login</a>
                <?php endif; ?>
            </div>

        </div>
    </body>
</html>