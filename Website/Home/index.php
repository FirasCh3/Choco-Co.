<?php
    session_start();
    require_once("../connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet">
    <title>Home</title>

</head>
<body>

    <!--header-->
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
            <h3>We are</h3>
            <h1>HANDMADE</h1>
        </header>
        <!---------------------------------------------------------------------->
        <div class='title_HOME'>
            <h1>DISCOVER OUR CATALOG</h1>
        </div>
        <!---------------------------------------------------------------------->
        <div class='row_HOME'>
            <?php
                $req = "select * from catalog";
                $res= mysqli_query($conn,$req);
                while($row=mysqli_fetch_array($res)){

                    echo"
                        <div class='col_HOME'>
                            <div class='content_HOME'>
                                <img src='$row[catalog_image]'>
                                <span></span>
                                <button><a href='../Catalog/Catalog.php?catalogId=$row[catalog_id]'>View more</a></button>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>  
        <!---------------------------------------------------------------------->
        <div class='title_HOME'>
            <h1>CHOCO CO.BLOG</h1>
        </div>
        <!---------------------------------------------------------------------->
        <div class="BLOG">
            <div class="Parent">
                    <div class="Pic_Child">
                        <img src="../../assets/HOME_PIC/TEST2.jpg">
                    </div>
                    <div class="Text_Child">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ad optio perspiciatis porro odit dolore impedit quia ratione eaque unde dolor explicabo quasi culpa temporibus magni, similique quae excepturi voluptatibus?</p>
                    </div>
            </div>

            <div class="Parent">
                    <div class="Text_Child">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ad optio perspiciatis porro odit dolore impedit quia ratione eaque unde dolor explicabo quasi culpa temporibus magni, similique quae excepturi voluptatibus?</p>
                    </div>
                    <div class="Pic_Child">
                        <img src="../../assets/HOME_PIC/TEST2.jpg">
                    </div>
            </div>

            <div class="Parent">
                    <div class="Pic_Child">
                        <img src="../../assets/HOME_PIC/TEST2.jpg">
                    </div>
                    <div class="Text_Child">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ad optio perspiciatis porro odit dolore impedit quia ratione eaque unde dolor explicabo quasi culpa temporibus magni, similique quae excepturi voluptatibus?</p>
                    </div>
            </div>
        </div>
        <button class="Read_More"><a href='../blog/blog.php'>Read More &rarr;</a></button>

</body>
</html>