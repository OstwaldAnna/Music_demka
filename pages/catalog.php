<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/style/style.css" rel="stylesheet">
    <title>Каталог</title>
</head>
<body>
<?php
include('../elements/header.php');
?>

<div class="container mt-3 text-center">
    <div class="row">
      
          <div class="col">
              <p class="fw-bold" style="font-size: 30px;">Товары компании</p>
          </div>
    </div>
</div>
<!-- Фильтрация -->
<?php
  $query = "SELECT * FROM `product`";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once '../vendor/connection.php';
            if ($_POST["sortBy"] == "price1") {
              $query = "SELECT * FROM `product` ORDER BY `price` ASC";

            } elseif ($_POST["sortBy"] == "price2") {
              $query = "SELECT * FROM `product` ORDER BY `price` DESC";

                
            }elseif ($_POST["sortBy1"] == "Name1") {
              $query = "SELECT * FROM `product` ORDER BY `name` ASC";


            }elseif ($_POST["sortBy1"] == "Name2") {
              $query = "SELECT * FROM `product` ORDER BY `name` DESC"; 


            }elseif ($_POST["sortBy3"] == "category1") {
              $query = "SELECT * FROM `product` WHERE `category`='Струнные' ";

            }elseif ($_POST["sortBy3"] == "category2") {
              $query = "SELECT * FROM `product` WHERE `category`='Клавишные' ";

            }elseif ($_POST["sortBy3"] == "category3") {
              $query = "SELECT * FROM `product` WHERE `category`='Смычковые' ";
            }
        }
  ?>
  <!-- Фильтрация -->
  
        <!-- Начало фильтрации -->
            <div class="container mt-5">
              <div class="row">
                  <div class="col">
                      <form method="post">
                          <select name="sortBy" class="form-select" aria-label="Default select example">
                          <option selected>Сортировать по цене:</option>
                          <option value="price1">Дешевле</option>
                          <option value="price2">Дороже</option>
                          </select>
                          <div class="container text-center">
                            <button class="btn btn-outline-dark mt-3">Применить</button>
                          </div>
                      </form>
                  </div>
                  <div class="col">
                      <form method="post">
                          <select name="sortBy1" class="form-select" aria-label="Default select example">
                          <option selected>Сортировать алфавиту:</option>
                          <option value="Name1">Алфавиту от А-Я</option>
                          <option value="Name2">Алфавиту от Я-А</option>
                          </select>
                          <div class="container text-center">
                            <button class="btn btn-outline-dark mt-3">Применить</button>
                          </div>
                      </form>
                  </div>
                  <div class="col">
                      <form method="post">
                          <select name="sortBy3" class="form-select" aria-label="Default select example">
                          <option selected>Отфильтровать по категории:</option>
                          <option value="category1">Струнные</option>
                          <option value="category2">Клавишные</option>
                          <option value="category3">Смычковые</option>
                          </select>
                          <div class="container text-center">
                            <button class="btn btn-outline-dark mt-3">Применить</button>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        <!-- Конец фильтрации -->
          </div>
        </div>
      </div>

<!-- Начало меню товаров -->
    <div class="container mt-5 text-center">
        <div class="row row-cols-3">
        <?php
            $_GET['query'] = $query;
            include ('../elements/get_products.php');
        ?>  
        </div>
    </div>
<!-- Конец меню товаров-->

<?php
include('../elements/footer.php');
?>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>