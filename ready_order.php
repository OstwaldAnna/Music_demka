<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/style/style.css" rel="stylesheet">
    <title>Подтверждение заказа</title>
</head>
<body>
    <?php
  include ('./elements/header.php');
    ?>

    <div class="mt-5 text-start" style=" margin-left: 3rem">
        <div class="row">
          <div class="col">
            <p class="fw-bold" style="font-size: 50px;">Подтвердите заказ</p>
          </div>
        </div>
    </div>
<!-- Таблица -->
    <form method="post">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Товар</th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Цена</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    include('./vendor/spawn_cart_item.php');
                ?>

            </tbody>
        </table>
    
        <div class="container mt-5 text-center">
          <div class="row">
            <div class="col">
              <p class="fw-bold" style="font-size: 50px;">Подтвердите заказ</p>
            </div>
          </div>
        <!-- Форма подтверждения заказа -->
        <form action="./vendor/create_order.php" method="post">
          <div class="row mt-3">
            <div class="col">
              <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
              <button class="btn btn-outline-secondary btn-lg btn-block; m-3" type="submit">Потвердить заказ</button>
            </div>
          </div>
          <?php 
        session_start();
        if (isset($_SESSION['msg'])){
            echo '<p class="msg">' . $_SESSION['msg'] . '</p>';
        }
        unset($_SESSION['msg']);
        ?>
        </form>
        <!-- Форма подтверждения заказа -->
    </div> 

    <?php
        include ('./elements/footer.php');
    ?>

<script src="/bootstrap/js/bootstrap.js" ></script> 
</body>
</html>