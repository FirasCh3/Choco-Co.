<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="script.js"></script>
</head>
<body>                                                       

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet">
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

        <p class="title">BLOG</p>
        <p class="sub-title">Recipes & Gift Ideas</p>
    </header>
    <p class="recipe-title">Our Recipes</p>
    <div class="card-container">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1613190924590-1e3d8f222269?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <div class="card-content">
            <h3>Chocolate cookies</h3>
            <p>Here is the recipe of a lucious cookies. Check it out!</p>
            <a href="../Recipes/Recipes.php?recipeId=0" class="btn">View Recipe</a>
            </div>
        </div>
        <div class="card">
            <img src="https://images.unsplash.com/photo-1505253149613-112d21d9f6a9?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <div class="card-content">
            <h3>Chocolate Cake</h3>
            <p>Here is the recipe of a lucious "Chocolate Cake". Check it out!</p>
            <a href="../Recipes/Recipes.php?recipeId=1" class="btn">View Recipe</a>
            </div>
        </div>
        <div class="card" href="Recipes.php">
            <img src="https://images.unsplash.com/photo-1504388192519-fb4be897c4d0?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <div class="card-content">
            <h3>Chocolate Satin</h3>
            <p>Here is the recipe of a lucious Chocolate Satin. Check it out!</p>
            <a href="../Recipes/Recipes.php?recipeId=2" class="btn">View Recipe</a>
            </div>
        </div>
    </div>


    <div class="carousel" duration="7000">
    <ul tabindex="0">
        <li id="c1_slide1"><div>Gift Chocolate!<br /><a href="../Gift_ideas/Gift_Ideas.php">See product</a></div></li>  
        <li id="c1_slide2"><div>Gift Chocolate!<br /><a href="../Gift_ideas/Gift_Ideas.php">See product</a></div></li>  
        <li id="c1_slide3"><div>Gift Chocolate!<br /><a href="../Gift_ideas/Gift_Ideas.php">See product</a></div></li>  
        <li id="c1_slide4"><div>Gift Chocolate!<br /><a href="../Gift_ideas/Gift_Ideas.php">See product</a></div></li>  
    </ul>
    <ol>
        <li><a href="#c1_slide1"></a></li>
        <li><a href="#c1_slide2"></a></li>
        <li><a href="#c1_slide3"></a></li>
        <li><a href="#c1_slide4"></a></li>
    </ol>
    <div class="prev">&lsaquo;</div>
    <div class="next">&rsaquo;</div>
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