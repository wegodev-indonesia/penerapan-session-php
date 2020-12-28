<?php

    session_start();

    include('connection.php');

    $pdo        = $db->prepare('SELECT * FROM product');
                  $pdo->execute();
    $products   = $pdo->fetchAll(PDO::FETCH_ASSOC);

    $cart       = isset($_SESSION['cart']) ? $_SESSION['cart'] : []; 

?>
<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="container">

            <nav class="main-menu">
                <a href="#" class="active">list</a>
                <a href="cart.php">Cart (<?= count($cart) ?>)</a>
            </nav>
            
            <div class="content">
                <?php foreach($products AS $product): ?>
                    <div class="product">
                        <p><?= $product['title'] ?></p>
                        <label>Rp, <?= number_format($product['price']) ?></label>
                        <a href="add-to-cart.php?id=<?= $product['id'] ?>">Add to cart</a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </body>
</html>    