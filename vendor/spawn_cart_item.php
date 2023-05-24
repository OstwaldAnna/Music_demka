<!-- Перенос карточки в корзину -->
<?php 
    require_once 'connection.php';
    $numberOfPositions = 0;

    if(isset($_SESSION['cart'])):
        $cost = 0;
        foreach($_SESSION['cart'] as $item):  
            $numberOfPositions++;          
            $id = $item['id'];
            $product = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` = '$id'");
            while ($row = mysqli_fetch_assoc($product)):
                $cost = $cost + $row['price']?>
                <tr>
                    <th scope="row">
                    </th>
                    <td>
                        <img style="object-fit: contain" class="border border-dark" width="100" height="100" alt="logo" src="/resources/images/<?php echo $row['image']?>.jpeg">
                    </td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['modal']?></td>
                    <td><input type="number" min="1" name="quantity_input_<?php echo $numberOfPositions?>" value="<?php echo $item['quantity']?>"></td>
                    <td><?php echo $row['price']?></td>
                </tr>
        <?php endwhile; endforeach; endif;?>
    <thead>
        <tr class="fw-bold" style="font-size: 20px;">
            <th scope="row"></th>
            <td colspan="2"></td>
            <td></td>
            <td>Итоговая цена:</td>
            <td><?php echo $cost?></td>
        </tr>
    </thead>
