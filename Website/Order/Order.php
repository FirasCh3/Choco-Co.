<?php
    session_start();
    if(isset($_SESSION["alert"])){
        $alert = $_SESSION["alert"];
    }
    unset($_SESSION["alert"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="Style.css" rel="stylesheet">
    <script src='Script.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet">
</head>
<body>
    <!--header-->
    <nav class="navbar">
        <h1 class="logo">Choco Co.</h1>
        <ul class="nav-links">
             <li><a href="#Home" class="active">Home</a></li>
             <li><a href="#Catalog">Catalog</a></li>
             <li><a href="#Blog">Blog</a></li>
             <li><a href="#Choco Co.">Choco Co.</a></li>
         </ul>
         <div class="icons">
            <i href="#shooping" class="fa fa-shopping-cart"></i>
            <i href="#search" class="fa fa-search"></i>
            <span class="quantity"><?php if(isset($_SESSION['Cart'])){echo sizeof($_SESSION['Cart']);}else{echo '0';}?></span>
         </div>
         
        </nav>

    <div class="info">
        <?php
            require_once("../connexion.php");
            $productId = $_GET["productId"];  
            $query = "select * from products where product_id='$productId'";
            $result = mysqli_query($conn, $query);
            if(isset($_SESSION['Cart'][$productId])){
                $item = json_decode($_SESSION['Cart'][$productId]);
                $quantity = $item->product_quantity;
            }else{
                $quantity = 0;
            }
            $row = mysqli_fetch_assoc($result);
            $productType = $row['type_produit'];
            if(mysqli_num_rows($result) > 0){
                echo"
                    <img src='$row[Product_image]'></img>
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
                                
                                    <input id='quantity-input' type='text' hidden value='$quantity' name='product_quantity'>
                                    <p id='qte'>$quantity</p>
                                    <button onclick='add()' type='button'>+</button>
                                </div>
                            </div>
                            <input type='submit' class='add' value='Add to cart'>
                            ";
                            if(!empty($alert)){
                                if(in_array($alert, ["Invalid quantity", "Product doesn't exist"])){
                                    echo "<span id='alert' class='error'>$alert</span>";
                                }else{
                                    echo "<span id='alert' class='valid'>$alert</span>";
                                    }  
                            }else{
                                echo "<span></span>";
                            }
                    }else{
                        header("location:../Home/index.html");
                        exit;
                    }
                        ?>
                
                <form>   
                </div> 
                
    </div>
    <div class="similair-articles">
        <p>Similair Products</p>
        <div class="row">
                <?php
                    $req = "select * from products where product_id!='$productId' and type_produit='$productType' limit 4";
                    $res = mysqli_query($conn, $req);
                    while($row=mysqli_fetch_assoc($res)){
                        echo "
                        <div class='col'>
                            <a href='../Order/Order.php?productId=$row[Product_id]'><img src='$row[Product_image]'></a>
                        </div>
                    ";
                    }
                    mysqli_close($conn);
                ?>
            </div>

    <!--
       footer
    -->
</body>
</html>