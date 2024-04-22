<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="Style.css" rel="stylesheet">
    <script src='Script.js'></script>
</head>
<body>
    <!--
        header
    -->
    <div>
        aaaaaaaaaaa
    </div>
    <div class="info">
        <?php
         echo "<img src='../../assets/product_images/Frame1.png'></img>";
            include("../connexion.php");
            $productId = $_GET["productId"];  
            $query = "select * from products where product_id='$productId'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            echo"
                <div class='command'>
                    <form method='POST' action='Cart.php'>
                        <input type='text' name='product_id' value='$row[Product_id]' hidden>
                        <input type='text' name='product_name' value='$row[Product_name]' hidden>$row[Product_name]
                        <hr>
                        <div class='prdctprice'>
                            <p>Price</p>
                            <input type='text' name='product_price' value='$row[Product_price]' hidden>$row[Product_price]$
                        </div>
                        <hr>
                        <div class='quantity'>
                            <p>Quantity</p>
                            <div class='quantity-value'>
                                <button onclick='Substract()' type='button'>-</button>
                                <input id='quantity-input' type='text' hidden value='0' name='product_quantity'>
                                <p id='qte'>0</p>
                                <button onclick='add()' type='button'>+</button>
                            </div>
                        </div>
                        <input type='submit' class='add' value='Add to cart'>
                    </form>
                    
                </div>  
            ";
            mysqli_close($conn);
        ?>
    </div>

    <!--
       footer
    -->
</body>
</html>