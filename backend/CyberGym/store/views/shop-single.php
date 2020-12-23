<?php
    include_once ('../Model/produit.php');
    include ('../controller/produitC.php');

    $productC = new produitC();
    $listeProduit=$productC->afficherProduit();
    
    ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Bootie Ecommerce Bootstrap Responsive Web Template | Shop-Single :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Bootie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="style/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="style/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>

    <!-- mian-content -->
    <!-- banner -->
    <?php
    include('header.php');
    ?>
    <section class="ab-info-main py-md-5 py-4">
    <center>
        <div class="container">
            <?php
			if (isset($_GET['id'])){
			$prod = $productC->recupererProduit($_GET['id']);
		    ?>
            <div class="left-ads-display col-lg-8">
                <div class="row">
                    <div class="desc1-left col-md-6">
                        <img src="img/store/<?PHP echo $prod['image']; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="desc1-right col-md-6 pl-lg-4">
                        <h2><?PHP echo $prod['name']; ?></h2>
                        <br>
                        <h4>category : <?PHP echo $prod['category']; ?></h4>        
                        <br>
                        <h4>Price : <?PHP echo $prod['price']; ?></h4>
                        <br>
                        <h4>Quantity : <?PHP echo $prod['quantity']; ?></h4>
                    </div>
                </div>
                <div class="col sub-para-w3layouts mt-5">

                    <h3 class="shop-sing">Product description</h3>
                    <p class="mt-3 italic-blue" style="font-size:30px;">
                        <?PHP echo $prod['description']; ?>
                    </p>
                </div>
            </div>
            <?php
		    }
            ?>
        </div>
        </center>
    </section>
    <!-- //contact -->
    <!-- footer -->
    <?php
    include('footer.php');
    ?>
    <!-- //footer -->
</body>

</html>