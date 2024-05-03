<?php
    session_start();
    require_once  "../connexion.php";
    $flag = "";
    if(isset($_SESSION["flag"])){
        $flag = $_SESSION["flag"];
    }
    unset($_SESSION["flag"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="Style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar">
        <h1 class="logo">Choco Co.</h1>
        <ul class="nav-links">
             <li><a href="../Home/index.php" class="active">Home</a></li>
             <!--<li><a href="../Catalog/Catalog.php">Catalog</a></li>-->
             <li><a href="../blog/blog.php">Blog</a></li>
             <li><a href="../ChocoCo/ChocoCo.html">Choco Co.</a></li>
         </ul>
         <div class="icons">
            <a href="../Commande/Commande.php"><i href="" class="fa fa-shopping-cart"></i></a>
            <i href="#search" class="fa fa-search"></i>
            <span class="quantity"><?php if(isset($_SESSION['Cart'])){echo sizeof($_SESSION['Cart']);}else{echo '0';}?></span>
         </div>
         
        </nav>

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
    <footer class="footer_services">

    <div class="footer_row">
        <div class="footer_column">
            <img src="../../assets/imagesFooter/target.png" alt="target">
            <h4>Click & Collect</h4>
            <p>You can collect whatever products you want.</p>
        </div>
        <hr>
        <div class="footer_column">
            <img src="../../assets/imagesFooter/delivery-truck.png" alt="delivery-truck">
            <h4>Fast Delivery</h4>
            <p>We provide really fast delivery!</p>  
        </div>
        <hr>
        <div class="footer_column" id="gift">
            <img src="../../assets/imagesFooter/gift.png" alt="gift">
            <h4>Personalized Gifts</h4>
            <p>We provide really wonderful gifts!</p>
        
        </div>
        <hr>
        <div class="footer_column">
            <img src="../../assets/imagesFooter/verified.png" alt="verified">
            <h4>Secure Payment</h4>
            <p>Don't worry about the payment part, we provide a secure payment!</p>
            
        </div>
        <hr>
        <div class="footer_column">
            <img src="../../assets/imagesFooter/swap.png" alt="swap">
            <h4>Free Return</h4>
            <p>In case any justified issue, we offer a free return</p>
        </div>

    </div>
    <!-- Droits d'auteur -->
    <div class="footer_bas">&copy; Choco Co. -2024</div> 
      
</footer>

    
</body>
</html>