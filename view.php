
<?php
  session_start();
    require_once 'abc.php';
    
    ?>
<div style="padding:60px 0;">
    <div class="container">
<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       View Account
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
        
        <h1 style='color:#3367D6'>View Your Profile</h1><br><br>
        
      
      
         <div style="float:right"><img src="<?php echo $_SESSION["picurl"];?>" height='150'width='150'><a href="update.php" style="float: right">Change</a></div><br><br>
            
         <br><div style='color:#3367D6;font-size: 24px;margin-top: 100px'>First Name :<span style="color:#000;text-align: center"><?php echo $_SESSION["fname"];?></span><a href="update.php" style="float: right">Edit</a> </div><br><br>
        
        <div style='color:#3367D6;font-size: 24px'>Last Name :<span style="color:#000"><?php echo $_SESSION["lname"];?></span><a href="update.php" style="float: right">Edit</a></div><br><br>
        
        
        <div style='color:#3367D6;font-size: 24px'>Email :<span><span style="color:#000"><?php echo $_SESSION["un"];?></span><a href="update.php" style="float: right">Edit</a></div><br><br>
        
        
        <div style='color:#3367D6;font-size: 24px'>Phone :<span style="color:#000"><?php echo $_SESSION["mob"];?></span><a href="update.php" style="float: right">Edit</a></div><br><br>
        
        
      
        
       
    </div>
    </div>


<?php
    require_once 'xyz.php';
 ?>