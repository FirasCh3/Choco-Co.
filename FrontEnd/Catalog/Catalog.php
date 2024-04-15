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
        <?php
            require_once "../connexion.php";
            echo"<div class='chocolate-tablet'>";
            $catalogId = $_GET["catalogId"];

            echo "</div>";

            echo"<div class='row'></div>";

                
        ?>
    </section>
        <!--
        footer
        -->
</body>
</html>