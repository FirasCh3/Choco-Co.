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
                                <button><a href=../Order/Order.php?productId=$row[Product_id]>Order now</a></button>
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

        <!--
            footer
        -->
        <footer class="services">
    <section id="services">
        <div class="contactus_et_map">
            <div class="contactus">
                <div class="description">
                    <i class="fa fa-map-marker" id="location" >&#160;&#160;&#160;Lorem ipsum dolor sit</i>
                    <i class="fa fa-phone" id="phone">&#160;&#160;&#160;(+216) 999 999 999</i>
                    <h3>FOLLOW US</h3>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>
                </div>
                <h1>Contact Us</h1>
                <div class="formulaire">    
                    <form action="">
                        <h2>Leave us a message</h2>
                        <input type="text" placeholder="Name" required>
                        <input type="email" placeholder="Mail" required>
                        <textarea placeholder ="Message"></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
            <div class="col" id="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.732494393068!2d-3.536356214648855!3d50.7249017985369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486da43958c82c81%3A0x3e47e71aceb7a4f3!2sChococo%20Exeter!5e0!3m2!1sen!2stn!4v1713897868474!5m2!1sen!2stn" width="94%" height=400em style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col">
            <img src=".\images\target.png" alt="">
            <h4>Click & Collect</h4>
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
        </div>
        <hr>
        <div class="col">
            <img src=".\images\delivery-truck.png" alt="">
            <h4>Fast Delivery</h4>
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>  
        </div>
        <hr>
        <div class="col" id="gift">
            <img src=".\images\gift.png" alt="">
            <h4>Personalized Gifts</h4>
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
        
        </div>
        <hr>
        <div class="col">
            <img src=".\images\verified.png" alt="">
            <h4>Secure Payment</h4>
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
            
        </div>
        <hr>
        <div class="col">
            <img src=".\images\swap.png" alt="">
            <h4>Free Return</h4>
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
        </div>

    </div>

    <!-- Droits d'auteur -->
    <div class="bas">&copy; Choco Co. -2024</div> 
      
</footer>
</body>
</html>