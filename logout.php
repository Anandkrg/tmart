<?php
    session_start();
    
    
    if(isset($_SESSION["un"]))
    {
        unset($_SESSION["un"]);
        session_destroy();
        $_SESSION=array();
    }
    
    
  
    
    require_once 'abc.php';
?>
<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Logout
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h2>NEW CUSTOMERS</h2>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	
                                
                               <h3 style="color: #ED1C24">Thanks For Visiting T-Mart</h3>
                               <a href="login.php"><h2 style="text-decoration: none">Login Again</h2></a>
                                
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>

<?php
require_once 'xyz.php';
?>