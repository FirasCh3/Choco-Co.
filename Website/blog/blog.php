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
             <li><a href="../Catalog/Catalog.php">Catalog</a></li>
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
            <img src="https://images.unsplash.com/photo-1519148246701-3dc1897a7a21?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2hvY29sYXRlJTIwcmVjaXBlc3xlbnwwfHwwfHx8MA%3D%3D" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolate cookies</h3>
            <p>Here is the recipe of a lucious cookies. Check it out!</p>
            <a href="../Recipes/Recipes.php?recipeId=0" class="btn">View Recipe</a>
            </div>
        </div>
        <div class="card">
            <img src="https://images.unsplash.com/photo-1505252929202-c4f39cda4d49?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolate Cake</h3>
            <p>Here is the recipe of a lucious "Chocolate Cake". Check it out!</p>
            <a href="../Recipes/Recipes.php?recipeId=1" class="btn">View Recipe</a>
            </div>
        </div>
        <div class="card" href="Recipes.php">
            <img src="https://images.unsplash.com/photo-1546898976-9850b9bba1e3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2hvY29sYXRlJTIwcGllfGVufDB8fDB8fHww" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolate Satin</h3>
            <p>Here is the recipe of a lucious Chocolate Satin. Check it out!</p>
            <a href="../Recipes/Recipes.php?recipeId=2" class="btn">View Recipe</a>
            </div>
        </div>
    </div>


    <div class="carousel" duration="7000">
    <ul tabindex="0">
        <li id="c1_slide1"><div>Gift Chocolate!<br /><a href="https://www.google.com">See product</a></div></li>  
        <li id="c1_slide2"><div>Gift Chocolate!<br /><a href="https://www.google.com">See product</a></div></li>  
        <li id="c1_slide3"><div>Gift Chocolate!<br /><a href="https://www.google.com">See product</a></div></li>  
        <li id="c1_slide4"><div>Gift Chocolate!<br /><a href="https://www.google.com">See product</a></div></li>  
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



</body>
</html>