<?php
    include "../controller/UtilisateurC.php";
    include_once '../Model/Utilisateur.php';
		
extract($_POST);
$utilisateurC = new UtilisateurC();
$listeUsers=$utilisateurC->afficherUtilisateurs();
$error = "";

if (
    isset($_POST["name"]) && 
    isset($_POST["firstname"]) &&
    isset($_POST["email"]) && 
    isset($_POST["password"])
){
    if (
        !empty($_POST["name"]) && 
        !empty($_POST["firstname"]) && 
        !empty($_POST["email"]) &&  
        !empty($_POST["password"])
    ) {
        $user = new Utilisateur(
            $_POST['name'],
            $_POST['firstname'], 
            $_POST['email'],
            $_POST['password']
        );
        
        $utilisateurC->modifierUtilisateur($user, $_GET['id']);
        header('refresh:5;url=viewusers.php');
    }
    else
        $error = "Missing information";
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Media ::
        w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <script src="style/js/controle2.js"></script>
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
		include('leftnavigation.php');
		?>
            <!--left-fixed -navigation-->

            <!-- header-starts -->
            <?php
		include ('header.php');
		?>
            <!-- //header-ends -->
            <!-- main content start-->
            
            <?php
			if (isset($_GET['id'])){
				$user = $utilisateurC->recupererUtilisateur($_GET['id']);
				
		?>
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="forms">
                        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Modify User</h4>
                                <div id="erreur"></div>
                            </div>
                            <div id="error">
                                <?php echo $error; ?>
                            </div>
                            <div class="form-body">

                                <form method="POST" action="">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="<?php echo $user['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname"
                                            value="<?php echo $user['firstname']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                            value="<?php echo $user['email']; ?>">
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-default" value="modify"
                                        onclick=" return verif_edit();">Modify</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
		}
		?>
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
</body>

</html>