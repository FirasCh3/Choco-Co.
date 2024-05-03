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
        
<!-- footer -->
<footer class="footer_services">
        <div class="footer_contactus_et_map">
            <div class="footer_containers">

                <h1>Contact us</h1>
                <div class="footer_contactus">
                    <div class="footer_description">

                        <i class="fa fa-map-marker" id="location" >&#160;&#160;&#160;22 Gandy St, Exeter EX4 3LS, United Kingdom</i>
                        <i class="fa fa-phone" id="phone">&#160;&#160;&#160;(+216) 999 999 999</i>
                        <h3>FOLLOW US</h3>
                        <div class="icons">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-linkedin"></i>
                        </div>

                    </div>

                    <form class="footer_formulaire" action="">   
                                                    
                            <h2>Leave us a message</h2>
                            <input type="text" placeholder="Name" required>
                            <input type="email" placeholder="Mail" required>
                            <textarea placeholder ="Message"></textarea>
                            <input type="submit" value="Send">
                       
                    </form>
                </div>


            </div>
            
            <div class="footer_column" id="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.732494393068!2d-3.536356214648855!3d50.7249017985369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486da43958c82c81%3A0x3e47e71aceb7a4f3!2sChococo%20Exeter!5e0!3m2!1sen!2stn!4v1713897868474!5m2!1sen!2stn" width="94%" height=400em style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

  
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