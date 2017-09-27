<?php
session_start();
    require_once 'abc.php';
    ?>

<div style=" padding: 60px 0;">
<div class="container">
<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       HELP
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
    <h2 style='color:#3367D6'>24 X 7 Customer HELP</h2><br><br>
    
    
    <h4>Assistance at your finger tips</h4>
    <form>
        <input type="text" placeholder="what can we do for you?" style="height: 40px;width: 70%;border-radius: 5px;
               padding: 5px"><button class='glyphicon glyphicon-search' type="submit" style="height: 40px;width:40px;
               border-radius: 5px;padding: 5px;background: #565656;color:#fff"></button>
    <p><small>eg. Exchange,Return,Damaged Product</small></p>
    </form>
    
    <h3  style='margin:40px 0;color:#3367D6'>Look Up By Issue Type</h3>
    <div id='one'>
        <h2>Order</h2>
        <div></div>
        
        <h2>Cancle and Return</h2>
        <div></div>
        
        <h2>Wallet</h2>
        <div></div>
        
        <h2>Shoping</h2>
        <div></div>
        
        <h2>Payment</h2>
        <div></div>
        
        <h2>Others</h2>
        <div></div>
        </div>
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
    </div>
 
    <script type="text/javascript">
$(document).ready(function(){
$('#one').accordion({event :"click"});
});
</script>



<?php
    require_once 'xyz.php';
    
    ?>