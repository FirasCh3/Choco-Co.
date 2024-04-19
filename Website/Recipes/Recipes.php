<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Recipes</title>
</head>
<body>

    <?php
        require_once "../connexion.php"; 
        $recipeId = 0 ;
        $catalogId = $recipeId;
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
                    <p>$recipeAbout</p>;      
                </div>

                <!--------------------------------------->

                <div class='MAIN_IMAGE'>
                    <img src='$recipeImage'>
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
                    <video controls class='vid'>
                        <source src='$recipeTutorial' type='video/mp4'>
                    </video>
                </div>";
        }
        mysqli_close($conn);   
    ?>

</body>
</html>