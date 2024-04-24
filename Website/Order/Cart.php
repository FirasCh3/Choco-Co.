<?php
    require_once "../connexion.php";
    session_start();
    $alert = "";
    if($_POST){
        $productId = $_POST["product_id"];
        $productName = $_POST["product_name"];
        $productPrice = $_POST["product_price"];
        $productQuantity = $_POST["product_quantity"];
        $query = "select * from products where product_id = '$productId'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            echo mysqli_num_rows($result);
            $product_encoded = json_encode(array("product_id"=>$productId, "product_name"=>$productName,"product_price"=>$productPrice,"product_quantity"=>$productQuantity));
            if($productQuantity>0){
                if(!isset($_SESSION["Cart"])){
                        $_SESSION["Cart"] = array($productId=>$product_encoded);
                        $alert = "Product added successfully";
                }
                else{
                    if($_SESSION["Cart"][$productId]){ 
                        $product_decoded = json_decode($_SESSION["Cart"][$productId]);
                       $product_decoded->product_quantity+=$productQuantity;
                       $_SESSION["Cart"][$productId] = json_encode($product_decoded);
                       $alert = "Updated quantity successfully";
                   }else{
                        $_SESSION["Cart"][$productId]=$product_encoded;
                        $alert = "Product added successfully";
                   }
                }
            }else{
                $alert = "Invalid quantity";
            } 
            $_SESSION["alert"] = $alert;
            echo $_SESSION["alert"];
            header("location:Order.php?productId=".$productId); 
            exit;
    }else{
        header("location:../Catalog/Catalog.php"); 
        exit;
    }
}else{
    header("location:../Catalog/Catalog.php"); 
    exit;
} 
?>