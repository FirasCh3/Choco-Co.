<?php
    session_start();
    require_once  "../connexion.php";
    $flag = "";
    if(isset($_SESSION["flag"])){
        $flag = $_SESSION["flag"];
        unset($_SESSION["Cart"]);
    }
    unset($_SESSION["flag"]);
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
                if (isset($_SESSION["Cart"])) {
                    $total_sum = 0;
                    foreach($_SESSION["Cart"] as $json){
                        $item = json_decode($json);
                        $req = "select product_image from products where product_id='$item->product_id'";
                        $res = mysqli_query($conn, $req);
                        $image = mysqli_fetch_assoc($res);
                        $total = $item->product_quantity*$item->product_price;
                        $total_sum +=$total ;
                        echo"
                            <tr>
                                <td>
                                    <img src='$image[product_image]'>
                                    $item->product_name
                                   
                                </td>
                                <td>
                                    $item->product_quantity
                                </td>
                                <td>$item->product_price$</td>
                                <td>$total$</td>
                            </tr>
                        
                        ";
                    }
                    echo "<tr>
                            <td></td>
                            <td></td>
                            <td>total:</td>
                            <td>$total_sum$</td>
                        </tr>";
                }else{
                    echo "<tr>
                            <td>
                                No items in cart
                            </td>
                        </tr>";
                }
                ?>
            </table>
        </div>
        <div class="text">
            <h1>02</h1>
            <h1>ADDRESS</h1>
        </div>
        <hr>
        <form method="POST" action="achat.php">
            <input type="text" placeholder="First Name" name="firstname">
            <input type="text" placeholder="Last Name" name="lastname">
            <input type="text" placeholder="Email" name="email">
            <input type="text" placeholder="Phone number" name="number">
            <input type="number" placeholder="Zip code" maxlength="4" name="zip">
            <input type="text" placeholder="Address" name="address">
            <input type="text" placeholder="City" name="city">
            <select name="pays">
                <option selected>Tunisia</option>
                <option>France</option>
            </select>
            <button type="submit">Confirm Order</button>
        </form>
        <?php
            if($flag!=""){
                echo "<span class='error'>$flag</span>";
            }
        ?>
    </div>
    
</body>
</html>