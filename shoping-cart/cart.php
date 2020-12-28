<?php
    session_start();

    include('connection.php');

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : []; 
?>
<html>
    <head>
        <title>Shopping Cart - Cart</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="container">

            <nav class="main-menu">
                <a href="list.php">list</a>
                <a href="cart.php" class="active">Cart (<?= count($cart) ?>)</a>
            </nav>
            
            <div class="content">   
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="text-center">Qty</th>
                        <th class="text-right">Total</th>
                    </tr>
                    <?php
                        $grandTotal = 0;
                        foreach($cart AS $row): 
                            $pdo                = $db->prepare('SELECT * FROM product WHERE id=:product_id');
                            $data['product_id'] = $row['id'];
                                                $pdo->execute($data);
                            $product            = $pdo->fetch(PDO::FETCH_ASSOC);

                            $total = $product['price'] * $row['quantity'];
                            $grandTotal += $total;
                    ?> 
                        <tr>
                            <td><?= $product['title'] ?></td>
                            <td><?= number_format($product['price']) ?></td>
                            <td class="text-center"><?= $row['quantity'] ?></td>
                            <td class="text-right"><?= number_format($total) ?></td>
                        </tr>
                    <?php endforeach; ?>

                    <tr>
                        <th colspan="3" class="text-right">Grand Total</th>
                        <td class="text-right"><?= number_format($grandTotal) ?></td>
                    </tr>

                </table>
            </div>

        </div>
        
    </body>
</html>    