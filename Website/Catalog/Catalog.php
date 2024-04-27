

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <script src="Script.js"></script>
    <link href="Style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
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
                            <img src='../../assets/product_images/Frame1.png'>
                            <span></span>
                            <button><a href=../Order/Order.php?productId=$row[Product_id]>Order now<a></button>
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
        <!--
            footer
        -->
</body>
</html>