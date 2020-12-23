<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Compose mail :: w3layouts</title>
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
			<div class="main-page compose">
				<h2 class="title1">Compose Mail Page</h2>
				<div class="col-md-4 compose-left">
					<div class="folder widget-shadow">
						<ul>
							<li class="head">Folders</li>
							<li><a href="inbox.html"><i class="fa fa-inbox"></i>Inbox <span>52</span></a></li>
							<li><a href="#"><i class="fa fa fa-envelope-o"></i>Sent </a></li>
							<li><a href="#"><i class="fa fa-file-text-o"></i>Drafts <span>03</span></a> </li>
							<li><a href="#"><i class="fa fa-flag-o"></i>Spam </a></li>
							<li><a href="#"><i class="fa fa-trash-o"></i>Trash</a></li>
						</ul>
					</div>
					<div class="chat-grid widget-shadow">
						<ul>
							<li class="head">Friends (Online) </li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i1.png" alt="">
										<label class="small-badge"></label>
									</div>
									<div class="chat-right">
										<p>Andrew Josifn</p>
										<h6>Nullam quis risus eget </h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i4.png" alt="">
										<label class="small-badge bg-green"></label>
									</div>
									<div class="chat-right">
										<p>Justen Ferry</p>
										<h6>Urna mollis ornare vel</h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i3.png" alt="">
										<label class="small-badge bg-green"></label>
									</div>
									<div class="chat-right">
										<p>Brown Andy </p>
										<h6>Quis risus ullam neget </h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i4.png" alt="">
										<label class="small-badge"></label>
									</div>
									<div class="chat-right">
										<p>Deos Jhon</p>
										<h6>Mollis ornare Urna vel</h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 compose-right widget-shadow">
					<div class="panel-default">
						<div class="panel-heading">
							Compose New Message 
						</div>
						<div class="panel-body">
							<div class="alert alert-info">
								Please fill details to send a new message
							</div>
							<form class="com-mail">
								<input type="text" class="form-control1 control3" placeholder="To :">
								<input type="text" class="form-control1 control3" placeholder="Subject :">
								<textarea rows="6" class="form-control1 control2" placeholder="Message :" ></textarea>
								<div class="form-group">
									<div class="btn btn-default btn-file">
										<i class="fa fa-paperclip"></i> Attachment
										<input type="file" name="attachment">
									</div>
									<p class="help-block">Max. 32MB</p>
								</div>
								<input type="submit" value="Send Message"> 
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>	
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
   
</body>
</html>