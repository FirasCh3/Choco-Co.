<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet">
    <title>Recipes</title>
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
            <span class="quantity">0</span>
         </div>
         
        </nav>


    <?php
        require_once "../connexion.php"; 
        $recipeId = 0 ;
        $query = "select * from Recipes where recipe_id='$recipeId'";
        $result = mysqli_query($conn, $query); 
        if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result); 
            $recipeImage = $row["recipe_image"];
            $recipeAbout = $row["recipe_about"];
            $recipeIngredients = $row["recipe_ingredients"];
            $recipeSteps = $row["recipe_steps"];
            $recipeTutorial = $row["recipe_tutorial"];
            echo"
                <header>
                    <h1>&#160;&#160;&#160;&#160;Let's<br><span>COOK</span></h1>
                </header>

                <!--------------------------------------->

                <div class = 'ABOUT_THE_RECIPE'>
                    <h2>ABOUT THE RECIPE</h2>
                    <div class='line'></div>
                    <p>$recipeAbout</p>      
                </div>

                <!--------------------------------------->

                <div class='MAIN_IMAGE'>
                    <img src=$recipeImage>
                </div>

                <!--------------------------------------->

                <div class='row'>
                    <div class='col1'> 
                        <h2>Ingredients</h2>
                        <div class='line2'></div>
                        <p>$recipeIngredients</p>
                    </div>
                    <div class='col11'>
                        <img src='../../assets/RECIPES_IMGs/RECIPES_EGGS.jpg'>
                    </div>
                </div>

                <!--------------------------------------->

                <div class='row'>
                    <div class='col22'>
                        <img src='../../assets/RECIPES_IMGs/RECIPES_FARINE.jpg'>
                    </div>
                    <div class='col2'>
                        <h2>Steps</h2>
                        <div class='line2'></div>
                        <p>$recipeSteps</p>
                    </div>
                    
                </div>

                <!--------------------------------------->

                <div class='Video'>
                    <h2>Video lessons</h2>
                    <div class='line'></div>
                    <video class='vid' controls>
                        <source src='$recipeTutorial' type='video/mp4'>
                    </video>
                </div>";
        }
        mysqli_close($conn);   
    ?>

</body>
</html>