

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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

    <header>
        <!--navbar-->
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
            <span class="quantity">0</span>
         </div>
         
        </nav>

        <p class="title">BLOG</p>
        <p class="sub-title">Recipes & Gift Ideas</p>
    </header>
    <p class="recipe-title">Our Recipes</p>
    <div class="card-container">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1519148246701-3dc1897a7a21?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2hvY29sYXRlJTIwcmVjaXBlc3xlbnwwfHwwfHx8MA%3D%3D" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolate Brownie</h3>
            <p>Here is the recipe of a lucious Chocolate Brownie. Check it out!</p>
            <a href="Recipes.php" class="btn">View Recipe</a>
            </div>
        </div>
        <div class="card">
            <img src="https://images.unsplash.com/photo-1505252929202-c4f39cda4d49?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolat Fondant</h3>
            <p>Here is the recipe of a lucious "Chocolat Fondant". Check it out!</p>
            <a href="Recipes.php" class="btn">View Recipe</a>
            </div>
        </div>
        <div class="card" href="Recipes.php">
            <img src="https://images.unsplash.com/photo-1546898976-9850b9bba1e3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2hvY29sYXRlJTIwcGllfGVufDB8fDB8fHww" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolate Pie</h3>
            <p>Here is the recipe of a lucious Chocolate Pie. Check it out!</p>
            <a href="Recipes.php" class="btn">View Recipe</a>
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