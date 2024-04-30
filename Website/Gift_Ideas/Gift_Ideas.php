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
             <li><a href="#Home" class="active">Home</a></li>
             <li><a href="#Catalog">Catalog</a></li>
             <li><a href="#Blog">Blog</a></li>
             <li><a href="#Choco Co.">Choco Co.</a></li>
         </ul>
         <div class="icons">
            <i href="#shooping" class="fa fa-shopping-cart"></i>
            <i href="#search" class="fa fa-search"></i>
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
                                <button><a href=./Order/Order.php?productId=$row[Product_id]>Order now<a></button>
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

    </section>
        <!--
            footer
        -->
</body>
</html>