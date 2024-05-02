<?php
    session_start();
    require_once("../connexion.php");
    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);
    $email = trim($_POST["email"]);
    $number = trim($_POST["number"]);
    $zip = trim($_POST["zip"]);
    $city = trim($_POST["city"]);
    $address = trim($_POST["address"]);
    $pays = trim($_POST["pays"]);
    if(empty($firstname) || empty($lastname) || empty($email) || empty($number) || empty($zip) || empty($city) ||empty($address)||empty($pays)){
        $_SESSION["flag"] = "Invalid input";
    }else{
        if(isset($_SESSION["Cart"])){
            foreach($_SESSION["Cart"] as $json){
                $item = json_decode($json);
                $date = $date = date("Y-m-d H:i:s"); 
                $req = "insert into orders values('','$date','$item->product_quantity', '$item->product_id','$firstname','$lastname','$email','$number','$zip','$city','$address','$pays')";
                mysqli_query($conn, $req);
            }
        }else{
            $_SESSION["flag"]="No products in cart";
        }
       
    }
    header("location:../Commande/Commande.php");
    exit;
    
?>