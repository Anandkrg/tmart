
 <?php
  session_start();
    
     $msg="";
    if(isset($_POST["subLogin"]))
    {
        $email=$_POST["e"];
        $pass=$_POST["p"];
        require_once 'config.php';
        $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
        $r=$db->query("select * from t_user where email='$email' and password='$pass'");
        if($r->num_rows==1)
        {
            $_SESSION["un"]=$email;
            while($row=$r->fetch_assoc())
            {
                $fname= $row["first_name"];
                $lname=$row["last_name"];
                $mobile=$row["mobile"];
                $picurl=$row["pro_pic"];
                $sq1=$row["sec_Q1"];
                $sq2=$row["Sec_Q2"];
                $sa1=$row["sec_A1"];
                $sa2=$row["sec_A2"];
                
                $_SESSION["fname"]=$fname;
                $_SESSION["lname"]=$lname;
                $_SESSION["mob"]=$mobile;
                $_SESSION["picurl"]=$picurl;
                $_SESSION["sq1"]=$sq1;
                $_SESSION["sq2"]=$sq2;
                $_SESSION["sa1"]=$sa1;
                $_SESSION["sa2"]=$sa2;
            }
            
        }
        else 
        {
            $msg="<h5 style='color:#ED1C24'>*Your credenential do match</h5>";
        }
        
        $db->close();
    }   
       
        require_once 'abc.php';
 ?>

		<!-- content-section-starts -->
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
                       Login
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
                             
                                <?php
                                  if(isset($_SESSION["un"]))
                                   {
                                   echo "<h3 style='color:#ED1C24'>Hello , ". $fname ; echo "<h3 style='color:#ED1C24'>Enjoy Our Premmimum Services </h3><h4><a href='index.php'>Go To Home</a></h4>" ; 
                                    
                                    }
                                    else
                                    { ?>
                               <h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
                                <?php
                                    echo $msg;
                                ?>  
                               
				<form action="login.php" method="post">
				  <div>
					<span>Email Address<label>*</label></span>
                                        <input type="text" name="e" required> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
                                        <input type="password" name="p" required> 
				  </div>
				  <a class="forgot"  id="forGot">Forgot Your Password?</a>
                                  
				  <input type="submit" value="Login" name="subLogin"><br>
                                  <a class="forgot" href="register.php">New User?</a>
			    </form>
                                <?php
                                    }
                                 ?>
                              
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>

            
            
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
      
      <span style="font-size:28px;color:#3367D6">Change Your Password</span > <span class="close">&times;</span>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 
                                         <?php
                                         if(isset($_POST['submit'])) 
                                         {    
                                             
                                             $email=$_POST['email'];
                                             $pass1=$_POST['password1'];
                                             $pass2=$_POST['password2'];
                                             $sq1=$_POST['sq1'];
                                             $sa1=$_POST['sa1'];
                                             $sq2=$_POST['sq2'];
                                             $sa2=$_POST['sa2'];
                                             
                                             if($pass1!=$pass2)
                                             {
                                                 echo "<h3 style='color:#ED1C24'>Your Password Do Not Match <a href='register.php'>Try Again</a></h3>";
                                                 die();
                                             }
                                                                                          
                                              
                                              require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("UPDATE t_user SET password='$pass1' where email='$email' AND sec_Q1='$sq1' AND Sec_Q2='$sq2' AND sec_A1='$sa1' AND sec_A2='$sa2'");
                                              if($db->affected_rows==1)
                                              {
                                                  echo "<h3 style='color:#ED1C24'>Congrats, $fname. Now You are the Member of the T-Mart, Get Ready To Experience A New Level Of E-commerce  </h3> <h4><a href='index.php'>Go To Home</a></h4>";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                              }
                                              
                                         }
                                         else
                                         {?>
                                         <p>Welcome, please enter the following details to continue.</p>
					 
                                         <form action="login.php" method="post" >
						 			 
						<ul>
							 <li class="text-info">Email: </li>
							 <li><input type="text" name="email" value="" required></li>
						 </ul>
						
                                                 <ul>
							 <li class="text-info">Question 1:</li>
                                                         <li><select name="sq1" value="" required style="height:40px; width:100%;border:1px solid #e6e6e6" >
                                                                 <option value="nick name">What is Your Nic Name ? </option>
                                                                 <option value="pet name">What is name of your pet ?</option>
                                                          <option value="">When(Year) you passed High School</option>
                                                          <option>Where  You Was Born ? </option>
                                                          </select></li>
						 </ul>
                                             
                                                 <ul>
							 <li class="text-info">Answer:</li>
							 <li><input type="text"  name="sa1" value="" required></li>
						 </ul>
                                             
                                                 <ul>
							 <li class="text-info">Question 2:</li>
							 <li><select name="sq2" value="" required style="height:40px; width:100%;border:1px solid #e6e6e6" >
                                                          <option >What is Your Nic Name ? </option>
                                                          <option >What is name of your pet?</option>
                                                          <option >When(Year) you passed High School</option>
                                                          <option>Where  You Was Born ? </option>
                                                          </select></li>
						 </ul>
                                             
                                                 <ul>
							 <li class="text-info">Answer:</li>
							 <li><input type="text"  name="sa2" value="" required></li>
						 </ul>
                                             
                                                <ul>
							 <li class="text-info">New Password: </li>
							 <li><input type="password" name="password1" value="" required></li>
						 </ul>
						 <ul>
							 <li class="text-info">Re-enter Password:</li>
							 <li><input type="password"  name="password2" value="" required></li>
						 </ul>
                                             
                                                  	
                                             <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a><br><br></p>
						 <input type="submit" name="submit" value="SUBMIT">
						  
					 </form>
                                             <?php
                                         }
                                         ?>
				 </div>
			</div>
			
			<div class="clearfix"></div>
		</div>
                
      
      
    
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("forGot");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

</script>


        <?php
        require_once 'xyz.php';
        ?>