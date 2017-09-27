<?php
session_start();
require_once 'abc.php';

?>
		<!-- registration-form -->
<div class="registration-form">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Registration
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<h2>Registration</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 
                                         <?php
                                         if(isset($_POST['submit'])) 
                                         {    
                                             $fname=$_POST['fname'];
                                             $lname=$_POST['lname'];
                                             $email=$_POST['email'];
                                             $pass1=$_POST['password1'];
                                             $pass2=$_POST['password2'];
                                             $sq1=$_POST['sq1'];
                                             $sa1=$_POST['sa1'];
                                             $sq2=$_POST['sq2'];
                                             $sa2=$_POST['sa2'];
                                             $picurl="img/guest.png";
                                             $mobile=$_POST['mobile'];
                                             if($pass1!=$pass2)
                                             {
                                                 echo "<h3 style='color:#ED1C24'>Your Password Do Not Match <a href='register.php'>Try Again</a></h3>";
                                                 die();
                                             }
                                             if($_FILES['pic']['error']==0)
                                             {
                                                 $picurl="img/".$_FILES['pic']['name'];
                                                 move_uploaded_file($_FILES['pic']['tmp_name'],$picurl);
                                              }
                                             
                                              
                                              require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("insert into t_user values('$fname','$lname','$email','$pass1','$sq1','$sq2','$sa1','$sa2','$picurl','$mobile')");
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
					 <p>If you have previously registered with us, <a href="login.php">click here</a></p>
                                         <form action="register.php" method="post" enctype="multipart/form-data">
						 <ul>
							 <li class="text-info">First Name: </li>
                                                         <li><input type="text" name="fname" value="" required></li>
						 </ul>
						 <ul>
							 <li class="text-info">Last Name: </li>
							 <li><input type="text" name="lname" value="" required></li>
						 </ul>				 
						<ul>
							 <li class="text-info">Email: </li>
							 <li><input type="text" name="email" value="" required></li>
						 </ul>
						 <ul>
							 <li class="text-info">Password: </li>
							 <li><input type="password" name="password1" value="" required></li>
						 </ul>
						 <ul>
							 <li class="text-info">Re-enter Password:</li>
							 <li><input type="password"  name="password2" value="" required></li>
						 </ul>
                                             
                                                 <ul>
							 <li class="text-info">Question 1:</li>
                                                         <li><select name="sq1" value="" required style="height:40px; width:100%;border:1px solid #e6e6e6" >
                                                                 <option value="nick name">What is Your Nic Name ? </option>
                                                                 <option value="pet name">What is your pet's name ?</option>
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
                                                          <option >What is name of you pet?</option>
                                                          <option >When(Year) you passed High School</option>
                                                          <option>Where  You Was Born ? </option>
                                                          </select></li>
						 </ul>
                                             
                                                 <ul>
							 <li class="text-info">Answer:</li>
							 <li><input type="text"  name="sa2" value="" required></li>
						 </ul>
                                             
                                                  <ul>
							 <li class="text-info">Profile Pic:</li>
							 <li><input type="file"  name="pic" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Mobile Number:</li>
							 <li><input type="text" name="mobile" value="" required></li>
						 </ul>		
                                             <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a><br><br></p>
						 <input type="submit" name="submit" value="REGISTER NOW">
						  
					 </form>
                                             <?php
                                         }
                                         ?>
				 </div>
			</div>
			<div class="reg-right">
				 <h3>Completely Free Account</h3>
				 <div class="strip"></div>
				 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				 <h3 class="lorem">Lorem ipsum dolor.</h3>
				 <div class="strip"></div>
				 <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
			</div>
			<div class="clearfix"></div>
		</div>
                
	</div>
</div>
<!-- registration-form -->
    

<?php
require_once 'xyz.php';
?>