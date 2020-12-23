<?php 
include("../controller/produitC.php");
require_once('../db.php');

$category= null;
if (isset($_POST['category'])) {
    $category = $_POST['category'];
   // echo($category);
}
$proddC = new produitC() ;
$listeCategory=$proddC->choseCategory($category);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CyberGym | Store</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
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

    <!-- header -->
    <?php
    include('header.php');
    ?>
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <div class="row">
                <!-- search -->
                <div class="search-bar w3layouts-newsletter">
                    <h3 class="sear-head">Search Here..</h3>
                    <?php	
                        $search_keyword = '';
                        if(!empty($_POST['search']['keyword'])) 
                        {
                            $search_keyword = $_POST['search']['keyword'];
                        }

                        $sql = 'SELECT * FROM products WHERE name LIKE :keyword ORDER BY id DESC ';
	
                        /* Pagination Code starts */
                        $test = $pdo_conn->prepare($sql);
                        $test->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
                        $test->execute();

                        $query = $sql;
                        $pdo_statement = $pdo_conn->prepare($query);
                        $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
                        $pdo_statement->execute();
                        $listeProduit = $pdo_statement->fetchAll();
                    ?>
                    <form action="" method="post" class="d-flex">
                        <input style="width:200px" type="text" placeholder="Product name..." name="search[keyword]"
                            value="<?php echo $search_keyword; ?>" id='keyword' class="form-control" required="">
                        <button class="btn">
                            <span class="fa fa-search" aria-hidden="true"></span>
                        </button>
                    </form>
                    <!-- product right -->
                    <div class=" container py-md-5">
                        <div class=" product-men row">
                            <?PHP
                            if(!empty($listeProduit)) {
                            foreach($listeCategory as $category){
                            ?>
                            <div class="col-md-4 product-shoe-info col shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="img/store/<?PHP echo $category['image']; ?>" class="img-fluid" alt="">
                                </div>
                                <div class="item-info-product">
                                    <h3>
                                        <a href="shop-single.php?id=<?PHP echo $category['id']; ?>">
                                            <?PHP echo $category['name']; ?>
                                        </a>
                                    </h3>
                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$
                                                <?PHP echo $category['price']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">Quantity :
                                                <?PHP echo $category['quantity']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?PHP
                            }
                            }
                            ?>
                        </div>
                    </div>
                    <?php echo ''; ?>

                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- footer -->
    <?php
    include('footer.php');
    ?>
    <!-- //footer -->
</body>

</html>