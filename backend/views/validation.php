<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Validation :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="style/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="style/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="style/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='style/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="style/js/jquery-1.11.1.min.js"></script>
<script src="style/js/modernizr.custom.js"></script>
 <!--//js-->
 
<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
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
		<?php 
		include ('leftnavigation.php');
		include ('header.php');
		?>
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms validation">
					<h2 class="title1">Validation Forms :</h2>
					<div class="form-three widget-shadow">
						<div data-example-id="form-validation-states"> 
							<form> <div class="form-group has-success"> <label class="control-label" for="inputSuccess1">Input with success</label> <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2"> <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> </div> <div class="form-group has-warning"> <label class="control-label" for="inputWarning1">Input with warning</label> <input type="text" class="form-control" id="inputWarning1"> </div> <div class="form-group has-error"> <label class="control-label" for="inputError1">Input with error</label> <input type="text" class="form-control" id="inputError1"> </div> <div class="has-success"> <div class="checkbox"> <label> <input type="checkbox" id="checkboxSuccess" value="option1"> Checkbox with success </label> </div> </div> <div class="has-warning"> <div class="checkbox"> <label> <input type="checkbox" id="checkboxWarning" value="option1"> Checkbox with warning </label> </div> </div> <div class="has-error"> <div class="checkbox"> <label> <input type="checkbox" id="checkboxError" value="option1"> Checkbox with error </label> </div> </div> </form> 
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Register Form :</h4>
							</div>
							<div class="form-body">
								<form data-toggle="validator">
									<div class="form-group">
										<input type="text" class="form-control" id="inputName" placeholder="Username" required>
									</div>
									<div class="form-group has-feedback">
										<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
										<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
										<span class="help-block with-errors">Please enter a valid email address</span>
									</div>
									<div class="form-group">
									  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
									  <span class="help-block">Minimum of 6 characters</span>
									</div>
									<div class="form-group">
									  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm password" required>
									  <div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<div class="radio">
											<label>
											  <input type="radio" name="gender" required>
											  Female
											</label>
										</div>
										<div class="radio">
											<label>
											<input type="radio" name="gender" required>
											Male
											</label>
										</div>
									</div>
									<div class="form-group">
										<div class="checkbox">
											<label>
												<input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
												I have read and accept terms of use.
											</label>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary disabled">Submit</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-6 validation-grids validation-grids-right">
							<div class="widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>Login form :</h4>
								</div>
								<div class="form-body">
									<form data-toggle="validator">
										<div class="form-group has-feedback">
											<input type="email" class="form-control" id="inputEmail" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required>
											<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
										</div>
										<div class="form-group">
											<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
										</div>
										<div class="bottom">
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
														Remember me
													</label>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary disabled">Login</button>
											</div>
											<div class="clearfix"> </div>
										</div>
									</form>
								</div>
							</div>
							<div class="inline-form widget-shadow">
								<div class="form-title">
									<h4>Recover form :</h4>
								</div>
								<div class="form-body">
									<form data-toggle="validator">
										<div class="form-group has-feedback">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
											<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
										</div>
										<div class="form-group">
											<input type="text" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Enter your phone number" required>
										</div>
										<div class="bottom">
											<div class="form-group">
												<button type="submit" class="btn btn-primary disabled">Login</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>	
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	   </div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='style/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="style/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="style/js/jquery.nicescroll.js"></script>
	<script src="style/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="style/js/bootstrap.js"> </script>
	
	<!--validator js-->
	<script src="style/js/validator.min.js"></script>
	<!--//validator js-->
	
</body>
</html>