<?php
require_once 'header.php';
$server="localhost";
$user="root";
$password="";
$db_name="edir";


// Create connection
$connection = new mysqli($server, $user, $password, $db_name);
// Check connection
if ($connection->connect_error) {
 die("Connection Failed: " . $connection->connect_error);
}



//   if(isset($_POST['register']))

if($_SERVER["REQUEST_METHOD"]=="POST")

{
	$name= $_POST ['cname'];
	$email=$_POST['cemail'];
	$subject=$_POST['csubject'];
	$message=$_POST['cmessage'];
	

	$query="INSERT INTO contact (name, email, subject, message) VALUES('$name' ,'$email','$subject','$message')";

	if(mysqli_query($connection, $query))
	{
		echo "Form Inserted Succesfully!";
	}
   
	mysqli_close($connection);
}

?>
   
        <main class="main">
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('../resources/images/mesob.JPG')">
        			<h1 class="page-title text-white">Contact us<span class="text-white">Keep in touch with us</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0 mt-2">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-6 mb-2 mb-lg-0">
                			<h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                			<p class="mb-3">Contact us if you have any question, comment, complimet, and any idea that you have regarding the Edir-Site. Our admins will contact you through the email you enter. Thank You in advance!</p>
                			<div class="row">
                				<div class="col-sm-7">
                					<div class="contact-info">
                						<h3>The Edir Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-map-marker"></i>
	                							Alemgena Kebele 08, Oromia, Ethiopia
	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="tel:#">+251911428051</a>
                							</li>
                							<li>
                								<i class="icon-envelope"></i>
                								<a href="mailto:#">edir92057@gmail.com</a>
                							</li>
											<li>
                								<i class="icon-clock-o"></i>
                								<span class="text-dark">Sunday</span> <br>6am-10pm ET
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-7 -->

                				<div class="col-sm-5">
                					<div class="contact-info">
                						<h3>The Edir Store</h3>

                						<ul class="contact-list">
                							
										<li>
                								<i class="icon-map-marker"></i>
	                							Alemgena Kebele 08, Oromia, Ethiopia
	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="tel:#">+251911428051</a>
                							</li><li>
                								<i class="icon-clock-o"></i>
	                							<span class="text-dark">Monday-Saturday</span> <br>11am-7pm ET
	                						</li>
                							<li>
                								<i class="icon-calendar"></i>
                								<span class="text-dark">Monday - Saturday</span> <br>8:30am-10:30pm ET <br> Sunday - 8:30am- 12:00pm

                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-5 -->
                			</div><!-- End .row -->
                		</div><!-- End .col-lg-6 -->
                		<div class="col-lg-6">
                			<h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                			<p class="mb-2">Use the form below to get in touch with the sales team</p>

                			<form  method = "POST" class="contact-form mb-3">
                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cname" class="sr-only">Name</label>
                						<input type="text" class="form-control" id="cname" name="cname" placeholder="Name *" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="cemail" class="sr-only">Email</label>
                						<input type="email" name="cemail" class="form-control" id="cemail" placeholder="Email *" required>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                				<div class="row">
                					
                					<div class="col-sm-6">
                                        <label for="csubject"  class="sr-only">Subject</label>
                						<input type="text" name="csubject" class="form-control" id="csubject" placeholder="Subject">
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                                <label for="cmessage"  class="sr-only">Message</label>
                				<textarea class="form-control" name="cmessage" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

                				<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                					<span>SUBMIT</span>
            						<i class="icon-long-arrow-right"></i>
                				</button>
                			</form><!-- End .contact-form -->
                		</div><!-- End .col-lg-6 -->
                	</div><!-- End .row -->
					<div class = "bg-light-2">
                	<hr class="mt-4  mb-5">

                	<div class="stores mb-4 mb-lg-5 bg-light-2">
	                	<h2 class="title text-center mb-3">Address</h2><!-- End .title text-center mb-2 -->

	                	<div class="row">
	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="../resources/images/location.PNG" alt="Map image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->
	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">Selam Meredaja Edir</h3><!-- End .store-title -->
	                							<address>Alemgena Kebele 08, Oromia, Ethiopia</address>
	                							<div><a href="tel:#">+251911428051</a></div>

	                							<h4 class="store-subtitle">Office Hours:</h4><!-- End .store-subtitle -->
                								
                								<div>Every Sunday 6am to 4am</div>

                								<a href="https://www.google.com/maps/@8.9338932,38.6709879,19.25z" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->

	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                						
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->

	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">Selam Meredaja Edir Store</h3><!-- End .store-title -->
	                							<address>Alemgena Kebele 08, Oromia, Ethiopia</address>

	                							<div><a href="tel:#">+251911428051</a></div>

	                							<h4 class="store-subtitle">Edir Store Hours:</h4><!-- End .store-subtitle -->
												<div>Monday - Saturday 8am to 5pm</div>
												<div>Saturday - 8am to 1:30pm</div>
												<div>Sunday - 6am to 4am</div>

                								<a href="https://www.google.com/maps/@8.9338932,38.6709879,19.25z" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->
	                	</div><!-- End .row -->
                	</div><!-- End .stores -->
					</div>
                </div><!-- End .container -->
        
            </div><!-- End .page-content -->
        </main><!-- End .main -->
<?php


require_once 'footer.php';

?>

    