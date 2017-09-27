<?php
session_start();
require_once 'abc.php';
?>
<!-- contact-page -->
<div class="contact">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Contact
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<div class="contact-info">
			<h2>FIND US HERE</h2>
		</div>
		<div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d7101.664909359951!2d81.92149200259529!3d27.13008669216043!3m2!1i1024!2i768!4f13.1!2m1!1sporter+ganj%2Cgonda!5e0!3m2!1sen!2sin!4v1483122183797"style="border:0" allowfullscreen></iframe>
                     
		</div>
		<div class="contact-form">
			<div class="contact-info">
				<h3>CONTACT FORM</h3>
			</div>
			<form>
				<div class="contact-left">
					<input type="text" placeholder="Name" required>
					<input type="text" placeholder="E-mail" required>
					<input type="text" placeholder="Subject" required>
				</div>
				<div class="contact-right">
					<textarea placeholder="Message" required></textarea>
				</div>
				<div class="clearfix"></div>
				<input type="submit" value="SUBMIT">
			</form>
		</div>
	</div>
</div>
<!-- //contact-page -->
<?php
require_once 'xyz.php';
?>