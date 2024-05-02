
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <script src="Script.js"></script>
    <link href="Style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700&display=swap" rel="stylesheet">
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
            <i href="../Commande/Commande.php" class="fa fa-shopping-cart"></i>
            <i href="#search" class="fa fa-search"></i>
            <span class="quantity"><?php if(isset($_SESSION['Cart'])){echo sizeof($_SESSION['Cart']);}else{echo '0';}?></span>
         </div>
         
        </nav>
    <header>
        <!--navbar-->



        <p>ENJOY</p>
        <p>THE CHOCOLATE</p>
    </header>
    <section>
    <div class='title'>
        <h1>
        <?php
              require_once "../connexion.php"; 
              $catalogId = $_GET["catalogId"];
              if(empty($catalogId)){
                header("location:../Home/index.php");
              }
              $query = "select catalog_name from catalog where catalog_id='$catalogId'";
              $result = mysqli_query($conn, $query); 
              echo mysqli_fetch_assoc($result)["catalog_name"];
        ?>
        </h1>


    </div>
    <div class='row'>
        <?php

            $query = "select * from products where catalog_id = '$catalogId'";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='col'>
                        <div class='content'>
                            <img src='$row[Product_image]'>
                            <span></span>
                            <button><a href=../Order/Order.php?productId=$row[Product_id]>Order now</a></button>
                        </div>
                        <div class='content-text'>
                            <p>$row[Product_name]</p>
                            <p>$row[Product_price]$</p>
                        </div>
                    </div>";
            }

            mysqli_close($conn);    
        ?>
    </div>
    </section>
   
</body>
</html>