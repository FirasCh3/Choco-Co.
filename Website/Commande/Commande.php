<?php
    session_start();
    require_once  "../connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Style.css" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="text">
            <h1>01</h1>
            <h1>SHOPPING CART</h1>
        </div>
        <hr>
        <div class="content">
            <table>
                <tr>
                    <th>PRODUCT DETAILS</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                    <th>TOTAL</th>
                </tr>
                <?php
                    foreach($_SESSION["Cart"] as $json){
                        $item = json_decode($json);
                        $req = "select product_image from products where product_id='$item->product_id'";
                        $res = mysqli_query($conn, $req);
                        $image = mysqli_fetch_assoc($res);
                        $total = $item->product_quantity*$item->product_price;
                        echo"
                            <tr>
                                <td>
                                    <img src='$image[product_image]'>
                                    $item->product_name
                                   
                                </td>
                                <td>$item->product_quantity</td>
                                <td>$item->product_price</td>
                                <td>$total</td>
                            </tr>
                        
                        ";
                    }
                ?>
            </table>
        </div>
    </div>
    
</body>
</html>