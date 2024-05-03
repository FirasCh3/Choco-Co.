<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_GIFTS.css">
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
    <title>Gift Ideas</title>

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

    <header>
        <!--navbar-->

        <p>GIFT IDEAS</p>
        <div class='line'></div>
    </header>
        <div class="row_GIFT">
            <?php
                require_once "../connexion.php"; 
                $query = "select * from products where type_produit = 'coffret'";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div class='col_GIFT'>
                            <div class='content_GIFT'>
                                <img src='$row[Product_image]'>
                                <span></span>
                                <button><a href=../Order/Order.php?productId=$row[Product_id]>Order now</a></button>
                            </div>
                            <div class='content-text_GIFT'>
                                <p>$row[Product_name]</p>
                                <p>$row[Product_price]$</p>
                            </div>
                        </div>";
                }

                mysqli_close($conn);    
            ?>
        </div>

    <div class='customize'>
        <h1>Customize yours</h1>
        <h2>Click here</h2>
        <span></span>
    </div>

        <!--
            footer
        -->
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