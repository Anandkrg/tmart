<?php
  require_once 'abc.php';
?>


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
                                                  echo "<h3 style='color:#ED1C24'>Congrats, . Now You are the Member of the T-Mart, Get Ready To Experience A New Level Of E-commerce  </h3> <h4><a href='index.php'>Go To Home</a></h4>";    
                                                  
                                              }
                                              else 
                                              {
                                                  echo $db->error;
                                              }
                                              
                                         }
                                         else
                                         {?>
                                         <p>Welcome, please enter the following details to continue.</p>
					 
                                         <form action="check.php" method="post" >
						 			 
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


<?php
  require_once 'xyz.php';
?>