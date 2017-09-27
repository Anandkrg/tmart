
<!DOCTYPE html>
<html>
<head>
<title>T-Mart a Flat E-Commerce Website</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js"  type="text/javascript"></script>
<script src="js/jquery-ui.js"  type="text/javascript"></script>
</head>
<body>
    
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						
						<li><a href="register.php"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>
                                                <li><a href="about.php"><span>About US</span></a></li>
                                                <li><a href="help.php"><Span>Help</span></a></li>
                                                <li><a href="faq.php"><Span>FAQs</span></a></li>
                                                <li><a href="feedback.php"><Span>Feedback</span></a></li>
                                               
                                                <li>
                                                      <?php
                                                     
                                                            if(isset($_SESSION["un"]))
                                                            { ?>
                                                    
                                                        <div class="dropdown">
                                                            <span onclick="ourUser()" class="dropbtn"><img src='<?php echo $_SESSION["picurl"];?>' height='25' width='25'>&nbsp;&nbsp;<?php echo  $_SESSION["fname"];?></span>                                                   <div id="myDropdown" class="dropdown-content">
                                                        <a href='view.php' style="color: #3367D6;">View Account</a>
                                                        <a href='view.php' style="color: #3367D6;">Update Account</a>
                                                        <a href='member.php' style="color: #3367D6;">Member Area</a>
                                                        <a href='update.php' style="color: #3367D6;">Update Account</a>
                                                        <a href='logout.php' style="color: #3367D6;">Logout</a>
                                                               </div>
                                                              </div>
                                                                            
                                                           <?php }   
                                                            else
                                                            { ?>
                                                                <a href="login.php"><img src='img/guest.png' height='30' width="30">Login</a>
                                                           <?php }
                                                        ?>  
                                               </li>
					</ul>
				</div>
                            
				<div class="header-right">
						<div class="cart box_1">
                                                       
							<a href="checkout.html">
								<h3> ₹0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
			<div class="banner-top">
		<div class="container">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="index.php"><span>T</span> -MART</a></h1>
				</div>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
                        <li><a href="kirana.php">Kirana</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6 >NEW IN</h6>
						            <li><a href="products.html">New In Clothing</a></li>
						            <li><a href="products.html">New In Bags</a></li>
						            <li><a href="products.html">New In Shoes</a></li>
						            <li><a href="products.html">New In Watches</a></li>
						            <li><a href="products.html">New In Grooming</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="products.html">Polos & Tees</a></li>
						            <li><a href="products.html">Casual Shirts</a></li>
						            <li><a href="products.html">Casual Trousers</a></li>
						            <li><a href="products.html">Jeans</a></li>
						            <li><a href="products.html">Shorts & 3/4th</a></li>
						            <li><a href="products.html">Formal Shirts</a></li>
						            <li><a href="products.html">Formal Trousers</a></li>
						            <li><a href="products.html">Suits & Blazers</a></li>
						            <li><a href="products.html">Track Wear</a></li>
						            <li><a href="products.html">Inner Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="products.html">Analog</a></li>
						            <li><a href="products.html">Chronograph</a></li>
						            <li><a href="products.html">Digital</a></li>
						            <li><a href="products.html">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
                        
                        
                        
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">women <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.html">New In Clothing</a></li>
						            <li><a href="products.html">New In Bags</a></li>
						            <li><a href="products.html">New In Shoes</a></li>
						            <li><a href="products.html">New In Watches</a></li>
						            <li><a href="products.html">New In Beauty</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="products.html">Polos & Tees</a></li>
						            <li><a href="products.html">Casual Shirts</a></li>
						            <li><a href="products.html">Casual Trousers</a></li>
						            <li><a href="products.html">Jeans</a></li>
						            <li><a href="products.html">Shorts & 3/4th</a></li>
						            <li><a href="products.html">Formal Shirts</a></li>
						            <li><a href="products.html">Formal Trousers</a></li>
						            <li><a href="products.html">Suits & Blazers</a></li>
						            <li><a href="products.html">Track Wear</a></li>
						            <li><a href="products.html">Inner Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="products.html">Analog</a></li>
						            <li><a href="products.html">Chronograph</a></li>
						            <li><a href="products.html">Digital</a></li>
						            <li><a href="products.html">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.html">New In Boys Clothing</a></li>
						            <li><a href="products.html">New In Girls Clothing</a></li>
						            <li><a href="products.html">New In Boys Shoes</a></li>
						            <li><a href="products.html">New In Girls Shoes</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-6">
					             <ul class="multi-column-dropdown">
									<h6>ACCESSORIES</h6>
						            <li><a href="products.html">Bags</a></li>
						            <li><a href="products.html">Watches</a></li>
						            <li><a href="products.html">Sun Glasses</a></li>
						            <li><a href="products.html">Jewellery</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
					
					<li><a href="contact.php">CONTACT</a></li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
</div>
        
<script>

function ourUser() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    