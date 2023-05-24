<!-- Карточка с описанием товара -->
<?php
        require_once './vendor/connection.php';
            
        $id = $_GET['id'];
        $query = "SELECT * FROM product WHERE id = '$id'";
        $result = $connect->query($query);
        $row = $result->fetch_assoc();
    ?>
        <div class="container mt-5 text-center">
          <div class="row">
            <div class="col">
              <img style="object-fit: none" class="border border-dark" width="800" height="500" alt="print" src="/resources/images/<?php echo $row['image']?>.jpeg">
            </div>
            <div class="col">
              <p class="text-start"  style="font-size: 30px;"><b><?php echo $row['name']?></b></p>
              <p class="text-start" style="font-size: 20px;"><b>Цена: </b> <?php echo $row['price']?></p>
              <p class="text-start" style="font-size: 20px;"><b>Год: </b> <?php echo $row['year']?></p>
              <p class="text-start" style="font-size: 20px;"><b>Категория: </b> <?php echo $row['category']?></p>
              <?php if(isset($_SESSION["user"])){
                                echo '<a href="../pages/basket.php?id=' . $row['id'] . '" class="btn btn-outline-secondary">В корзину</a>';
                            }?>
            </div>
          </div>
        </div>