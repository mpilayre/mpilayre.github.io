<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href="style.css" type="text/css" rel="stylesheet" />
<link href="mediaqueries.css" type="text/css" rel="stylesheet" />
<title>Millicent Jane Pilayre Portfolio</title>
</head>

<body>
	<div id="navigation_container">  <!-- Start of Navigation Container -->  
    	<div id="navigation"> <!-- Start of Navigation-->
        
        	<div id="title"><!--Start of Title-->
                <h1>millicent jane f. pilayre</h1>
            </div> <!--End of Title-->
            
            <div id="menu"> <!--Start of Menu-->
            	<ul>
                	<li><a href="index.html" class="active">Home</a></li>
                    <li><a href="works.html">Works</a></li>
                </ul>
            </div>	<!--End of Menu-->
            
            <div class="clear"></div>
        </div>	<!-- End of Navigation-->
    </div>	<!-- End of Navigation Container --> 
    
    
    
    
    
	<div id="wrapper"><!-- Wrapper -->
        <div id="header"> <!--Start of Header-->
        	<h1>An Online Portfolio Made Responsive From Scratch.</h1>
            <p>Fluid and Responsive Website Created and Implemented.</p>
        </div> <!--End of Header-->
        
        <div id="works_home"> <!--Start of Works-->
        	<img src="images/works.jpg" border="0" />
        </div> <!--End of Works-->
        
      <div id="biography"><!--Start of Bio-->
       	<h4>Biography</h4>
            <br/>
            <div id="bio_slider"><!--Start of Bio_Slider-->
            	<img src="images/bio_img.jpg" />
              	<p class="first">ABSOLUTE LOVER OF THE WEB</p>
                <p>I would really love to show you what I can do.</p>
          </div><!--End of Bio_Slider-->
            
            <div id="experience"><!--Start of Experience-->
           	  <h4>Technical Experience</h4>
              <br/>
           	  <h5><b>Front-End Web Developer, Web & Graphics
Designer, Flash Animator</b></h5>
			  <p>I have a degree in Bachelor of Science in Information Technology (IT). I have two years experience in Web Front-End Development. I have good working knowledge in <b>HTML4.0 / HTML5.0, CSS2.0 / CSS3.0, Javascript, Jquery, and Flash</b>. I also have experience in <b>Wordpress Theme Development</b>. </p>
			  <br />
              <br />
              <p class="button"><a href="works.html">See my Works</a></p>
            </div><!--End of Experience-->
            
      </div><!--End of Bio-->
</div><!-- End of Wrapper -->


<div id="footer_container"> <!--Start of Footer Container -->
	<div id="footer_wrapper"><!-- Start of Footer Wrapper -->
   
    	<div id="footer"> <!-- Start of Footer -->
        	
            <div id="contact"> <!-- Start of Contact -->
            	<h5>Contact Me</h5>
            </div> <!-- End of Contact -->
            
            <div id="email"> <!-- Start of Email -->
            	<h5>Email</h5>
                <p>For whatever related venture you feel i might be in service of, directly reach my email address:<br />
<i><span style="font-family: Georgia, 'Times New Roman', Times, serif;"><a href="mailto:mpilayre@gmail.com" target="_blank">mpilayre@gmail.com</a></span></i></p>
            </div> <!-- End of Email -->
            
             <div id="message"> <!-- Start of Message -->
            	<h5>Drop me a Message Here</h5>
                
                <?php
						$name = $email = $msg = $msg2 = $headers = "";
						$nameerror = $emailerror = $msgerror = "";
						$x = 0;
						
						$to = 'mpilayre@gmail.com' ;     
   						$subject = 'You have message from Portfolio Site'; 
						 					
					if($_SERVER["REQUEST_METHOD"] == "POST"){
						$name = $_POST["contactname"];
						$email = $_POST["contactemail"];
						$msg = $_POST["contactmsg"];
						
						function clean_data($input){
							$input = trim($input);
							$input = stripslashes($input);
							$input = htmlspecialchars($input);
							return $input;
						}
						
						if(empty($_POST['contactname'])){
							$nameerror = "Required. Please enter name<br/>";
							$x++;
						}
						else{
							$name = clean_data($_POST['contactname']);
							if (!preg_match("/^[a-zA-Z ]*$/",$name))
  							{
  								$nameerror = "Only letters and white space allowed<br/>"; 
								$x++;
  							}
							else{
								$headers = 'MIME-Version: 1.0' . "\r\n";
   								$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
								$headers .= "From:".$name;
								/*?>
                            	<script language="javascript" type="text/javascript">
									alert('Contact name success');
									var sStr = "x is <?php echo $x ?>.";
									alert(sStr);
								</script>
                            	<?php*/
							}
						}
							
						if(empty($_POST['contactemail'])){
							$emailerror = "Required. Please enter email<br/>";
							$x++;
						}
						else{
							$email = clean_data($_POST['contactemail']);
							if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
 							{
  								$emailerror = "Invalid email format<br/>"; 
								$x++;
  							}
							else{
								$headers .="\nReply to <".$email.">";
								/*?>
        	                    <script language="javascript" type="text/javascript">
									alert('Contact email success');
									var sStr = "x is <?php echo $x ?>.";
									alert(sStr);
								</script>
								<?php*/
							}
						}
						
						$text = $_POST['contactmsg'];
						if(empty($text)){
							$msgerror = "Required. Please enter message";
							$x++;
						}
						else{
								$msg = "Your Message: ";
								$msg .= clean_data($_POST['contactmsg']);
								$msg2 = clean_data($_POST['contactmsg']);
								/*?>
                            	<script language="javascript" type="text/javascript">
									alert('Contact message success');
									var sStr = "x is <?php echo $x ?>.";
									alert(sStr);
								</script>
                            	<?php*/
						}	
					
						if($x < 1)
						{
							mail($to, $subject, $msg, $headers);
							/*?>
                            <script>alert('Send Success')</script>
                            <?php*/
						}
						
					}
				
				?>
                <p>
                	<form name="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="cntactform">
                    	<br />
                    	<label>Name:</label>
                    	<input name="contactname" id="contactname" type="text" value="<?php echo $name; ?>"  />
                        <span class="name"><?php echo $nameerror; ?></span>
                        <label>Email:</label>
                        <input name="contactemail" id="contactemail" type="text" value="<?php echo $email; ?>" />
                        <span class="name"><?php echo $emailerror; ?></span>
                        <label>Message:</label>
                        <textarea name="contactmsg" id="contactmsg" cols="10"><?php $msg2; ?></textarea>
                        <span class="name"><?php echo $msgerror; ?></span>
                        <input type="submit" value="Send" name="submit" id="submit"/><input type="reset" value="Clear" id="reset" name="reset" />
                    </form>
                </p>
            </div> <!-- End of Message -->
            
             <div id="otherworks"> <!-- Start of Other Works -->
            	<h5>Other Works</h5>   
               <br />
               <p> <img src="images/comingsoon.png" border="0" />Preparing something cool for this section. Will be updating soon! Meanwhile, why don't you check out the websites I've made? Click <a href="works.html"><b>HERE</b></a>. </p>
                <!--<p>Flash Microsite</p>
                <a href="#"><img src="images/works1.jpg" border="0" /></a>
            	<a href="#"><img src="images/works2.jpg" border="0" /></a>
            
            	<p>Email Campaign / Reader's Digest IPAD</p>
                <a href="#"><img src="images/works3.jpg" border="0" /></a>
            	<a href="#"><img src="images/works4.jpg" border="0" /></a>-->
            </div> <!-- End of Other Works -->
            
            <div class="clear"></div>
            
    	</div><!-- End of Footer -->
    
	</div><!-- End of Footer Wrapper -->
</div><!-- End of Footer Container -->

    <div id="copyright"><!--Start of Copyright-->
    	<p>Theme Designed and Developed by <a href="index.html"><b><u>Millicent Jane F. Pilayre</u></b></a><br />
Copyright &copy; 2013. All Rights Reserved.</p>
    </div><!--End of Copyright-->
    
</body>
</html>
