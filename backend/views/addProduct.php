<?php
    include_once '../Model/produit.php';
    include_once '../Controller/produitC.php';

    $error = "";

    $product = null;

	$productC = new produitC();
	
    if (
        isset($_POST["name"]) && 
        isset($_POST["description"]) &&
        isset($_POST["price"]) && 
        isset($_POST["quantity"]) &&
        isset($_POST["category"]) &&
        isset($_POST["image"])
    ) {
        if (
            !empty($_POST["name"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["price"]) && 
            !empty($_POST["quantity"]) &&
            !empty($_POST["category"]) && 
            !empty($_POST["image"])
        ) {
            $product = new produit(
                $_POST['name'],
                $_POST['description'], 
                $_POST['price'],
                $_POST['quantity'],
                $_POST['category'],
                $_POST['image']
            );
            $productC->ajouterProduit($product);
            //header('Location:addProduct.php');
        }
        else
            $error = "Missing information";
    }

?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Administration | Add product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <script src="style/js/controle.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="style/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="style/css/style.css" rel='stylesheet' type='text/css' />
    <link href="style/css/forms.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS-->
    <link href="style/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='style/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- side nav css file -->

    <!-- js-->
    <script src="style/js/jquery-1.11.1.min.js"></script>
    <script src="style/js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
    <!--//webfonts-->

    <!-- Metis Menu -->
    <script src="style/js/metisMenu.min.js"></script>
    <script src="style/js/custom.js"></script>
    <link href="style/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->

</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <?php 
        include ('leftnavigation.php');
        include ('header.php');
		?>
            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">
                    <h2 class="title1">Add a product</h2>
                    <div id="erreur"></div>
                    <div class="widget-shadow">
                        <form class="contact-form" method="POST" action="">
                            <div class="input-fields">
                                <div class="form-group">
                                    <label>Product name</label>
                                    <input type="text" class="input" placeholder="Product name" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" class="input" placeholder="Price" name="price" id="price">
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" class="input" placeholder="Quantity" name="quantity"
                                        id="quantity">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <br>
                                    <select id="category" name="category" Required>
                                        <option value="select" name="select" id="select">select</option>
                                        <option value="protein" name="protein" id="protein">Protein powders</option>
                                        <option value="mechanical" name="mechanical" id="mechanical">Mechanical tools</option>
                                        <option value="handy" name="handy" id="handy">Handy tools</option>
                                    </select>
                                </div>
                                <input type="file" accept=".png , .jpg , .jpeg" name="image">
                            </div>
                            <div class="description">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea placeholder="Product description" name="description"
                                        id="description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default" name="Add" value="Add product"
                                    onclick=" return verif();">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- side nav js -->
        <script src='style/js/SidebarNav.min.js' type='text/javascript'></script>
        <script>
        $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->

        <!-- Classie -->
        <!-- for toggle left push menu script -->
        <script src="style/js/classie.js"></script>
        <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };

        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
        </script>
        <!-- //Classie -->
        <!-- //for toggle left push menu script -->

        <!--scrolling js-->
        <script src="style/js/jquery.nicescroll.js"></script>
        <script src="style/js/scripts.js"></script>
        <!--//scrolling js-->

        <!-- Bootstrap Core JavaScript -->
        <script src="style/js/bootstrap.js"> </script>
        <!-- //Bootstrap Core JavaScript -->

</body>

</html>