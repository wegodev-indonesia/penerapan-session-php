<?php

    include('connection.php');

    $email       = $_POST['email'];
    $password    = $_POST['password'];

    $pdo                = $db->prepare('SELECT * FROM user WHERE email=:email AND password=:password');
    $data['email']      = $email;
    $data['password']   = $password;
                          $pdo->execute($data);
                          
    if($pdo->rowCount()){
        $user = $pdo->fetch();     

        header('location: list.php?user_id='.$user['id']);
    }else{
        header('location: login.php?error=true');
    }