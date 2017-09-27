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
                       Update Account
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
       
         <h1 style='color:#3367D6'>Update Your Account</h1><br><br>
         
         
         <div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
                                   
                                    
                                    <?php
                                    $email=$_SESSION['un'];
                                         if(isset($_POST['submit1'])) 
                                         {    
                                             
                                             $fname=$_POST['fname'];
                                             require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("UPDATE t_user SET first_name='$fname' where email='$email'");
                                              if($db->affected_rows==1)
                                              {
                                                  echo "<h5 style='color:#159F5C'> *First Name Updated Successfully </h5>";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                              }
                                         }
                                         
                                         
                                         else if(isset($_POST['submit2']))
                                             {
                                         
                                             $lname=$_POST['lname'];
                                             require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("UPDATE t_user SET last_name='$lname' where email='$email'");
                                              if($db->affected_rows==1)
                                              {
                                                  echo "<h5 style='color:#159F5C'> *Last Name Updated Successfully  ";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                              }
                                             
                                         }
                                         
                                         else if(isset($_POST['submit3']))
                                             {
                                             $mobile=$_POST['mobile'];
                                             require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("UPDATE t_user SET mobile='$mobile' where email='$email'");
                                              if($db->affected_rows==1)
                                              {
                                                  echo "<h5 style='color:#159F5C'> *Phone Number Updated Successfully  ";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                              }
                                             
                                         }
                                         
                                         else if(isset($_POST['submit4']))
                                             {
                                             if($_FILES['pic']['error']==0)
                                             {
                                                 $picurl="img/".$_FILES['pic']['name'];
                                                 move_uploaded_file($_FILES['pic']['tmp_name'],$picurl);
                                              }
                                             require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("UPDATE t_user SET pro_pic='$picurl' where email='$email'");
                                              
                                              if($db->affected_rows==1)
                                              {
                                                  echo "<h5 style='color:#159F5C'> *Profile Photo Updated Successfully  ";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                              }
                                         }
                                         
                                         else if(isset($_POST['submit5']))
                                             {
                                             $sq1=$_POST['sq1'];
                                             $sa1=$_POST['sa1'];
                                             require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("UPDATE t_user SET sec_Q1='$sq1' where email='$email'");
                                              $db->query("UPDATE t_user SET sec_A1='$sa1' where email='$email'");
                                              if($db->affected_rows==1)
                                              {
                                                  echo "<h5 style='color:#159F5C'> *First Security Question Updated Successfully  ";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                              }
                                         }
                                        
                                         
                                         else if(isset($_POST['submit6']))
                                             {
                                             $sq2=$_POST['sq2'];
                                             $sa2=$_POST['sa2'];
                                             require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("UPDATE t_user SET Sec_Q2='$sq2' where email='$email'");
                                              $db->query("UPDATE t_user SET sec_A2='$sa2' where email='$email'");
                                              if($db->affected_rows==1)
                                              {
                                                  echo "<h5 style='color:#159F5C'> *Secound Security Queston Updated Successfully  ";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                              }
                                         }
                                         
                                         else if(isset($_POST['submit7']))
                                         {
                                             $cpass=$_POST['cpassword'];
                                             $pass1=$_POST['password1'];
                                             $pass2=$_POST['password2'];
                                             
                                             if($pass1!=$pass2)
                                             {
                                                 echo "<h3 style='color:#ED1C24'>Your Password Do Not Match </h3><a href='update.php'>Change Password</a>";
                                                 die();
                                             }
                                             
                                             
                                             
                                             require_once 'config.php';
                                              
                                              $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                                              $db->query("UPDATE t_user SET password='$pass1' where email='$email' AND password='$cpass'");
                                              if($db->affected_rows==1)
                                              {
                                                  echo "<h5 style='color:#159F5C'> *Password Changed Successfully  ";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                                  echo "<h5 style='color:#CC0000'> *Your current Password is wrong "; 
                                              }
                                             
                                         }
                                        
                                         ?>
                                    
                                    
         
         
                                            <form action="update.php" method="post">
						 <ul>
							 <li class="text-info">First Name: </li>
                                                         <li><input type="text" name="fname" value="<?php echo $_SESSION["fname"];?>" required></li>
						 </ul>
                                                 <input type="submit" name="submit1" value="UPDATE">
                                             </form>
                                     
              
                                             <form action="update.php" method="post">
						 <ul>
							 <li class="text-info">Last Name: </li>
							 <li><input type="text" name="lname" value="<?php echo $_SESSION["lname"];?>" required></li>
						 </ul>	
                                                 <input type="submit" name="submit2" value="UPDATE">
                                             </form>
                                     
                                              
                                             <form action="update.php" method="post">
                                                 <ul>
							 <li class="text-info">Question 1:</li>
                                                         <li><select name="sq1" value="<?php echo $_SESSION["sq1"];?>" required style="height:40px; width:100%;border:1px solid #e6e6e6" >
                                                                 <option value="nick name">What is Your Nic Name ? </option>
                                                                 <option value="pet name">What is name of your pet name ?</option>
                                                          <option value="">When(Year) you passed High School</option>
                                                          <option>Where  You Was Born ? </option>
                                                          </select></li>
						 </ul>
                                                  
                                                 <ul>
							 <li class="text-info">Answer:</li>
							 <li><input type="text"  name="sa1" value="<?php echo $_SESSION["sa1"];?>" required></li>
						 </ul>
                                                  <input type="submit" name="submit5" value="UPDATE">
                                            </form>
                                     
                                                  
                                                  
                                             <form action="update.php" method="post">
                                                 <ul>
							 <li class="text-info">Question 2:</li>
							 <li><select name="sq2" value="<?php echo $_SESSION["sq2"];?>" required style="height:40px; width:100%;border:1px solid #e6e6e6" >
                                                          <option >What is Your Nic Name ? </option>
                                                          <option >What is name of your pet name?</option>
                                                          <option >When(Year) you passed High School</option>
                                                          <option>Where  You Was Born ? </option>
                                                          </select></li>
						 </ul>
                                                
                                                 <ul>
							 <li class="text-info">Answer:</li>
							 <li><input type="text"  name="sa2" value="<?php echo $_SESSION["sa2"];?>" required></li>
						 </ul>
                                                 <input type="submit" name="submit6" value="UPDATE">
                                              </form>
                                     
                                             
                                    
                                               <form action="update.php" method="post" enctype="multipart/form-data">
                                                  <ul>
							 <li class="text-info">Profile Pic:</li>
							 <li><input type="file"  name="pic" value="<?php echo $_SESSION["picurl"];?>"></li>
						 </ul>
                                                 <input type="submit" name="submit4" value="UPDATE">
                                                  
                                              </form>
                                     
                                    
                                           <form action="update.php" method="post">
						 <ul>
							 <li class="text-info">Mobile Number:</li>
							 <li><input type="text" name="mobile" value="<?php echo $_SESSION["mob"];?>" required></li>
						 </ul>	
						 <input type="submit" name="submit3" value="UPDATE">
					 </form>
                                     <hr>
                                         <form action="update.php" method="post">
                                             <h3 style="color:#3367D6;margin-bottom: 25px;font-weight: bold">Change Your Password</h3>
                                             
                                                 <ul>
							 <li class="text-info">Current Password: </li>
							 <li><input type="password" name="cpassword" value="" required></li>
						 </ul>
                                             
						 <ul>
							 <li class="text-info">New Password: </li>
							 <li><input type="password" name="password1" value="" required></li>
						 </ul>
						 <ul>
							 <li class="text-info">Re-enter Password:</li>
							 <li><input type="password"  name="password2" value="" required></li>
						 </ul>
						 <input type="submit" name="submit7" value="UPDATE">
				         </form>
                                    
                                </div>
                        </div>
         </div>
   
        
        
        
        
        
        
        
        
        
        
    </div>
</div>




<?php
    require_once 'xyz.php';
    
    ?>