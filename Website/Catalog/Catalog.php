<?php
    require_once "../connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="Script.js"></script>
    <link href="Style.css" rel="stylesheet">
</head>
<body>
    <!--
        header
        -->
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
                        <img src='x'></img>
                        <p>$row[Product_name]</p>
                        <p>$row[Product_price]</p>
                    </div>";
            }

                
        ?>
    </div>
    </section>
        <!--
        footer
        -->
</body>
</html>