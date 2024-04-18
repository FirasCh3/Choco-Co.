<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="Style.css" rel="stylesheet">
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
                <div class='text'>
                    <p>$row[Product_name]</p>
                    <hr>
                    <div class='prdctprice'>
                        <p>price</p>
                        <p>$row[Product_price]$</p>
                    </div>
                    <hr>
                    <div>

                    </div>
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