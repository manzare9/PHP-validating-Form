<!DOCTYPE html>

<html class="no-js" lang="en">
	

	<head>


<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />  
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />  
<style>

.error {color: #FF0000;}

.label
{
  width: 400px;
  margin: 10px 0 0 0;
  padding: 10px;
  background-color: #ccccff;
  text-align: center;
  border: 1px solid #ccccff;
}

.elements
{
  border: 1px solid #ccccff;
  padding: 10px;
  border: 1px solid #ccccff;
  width: 400px;
}

button
{
   margin: 50px;
}
</style>


<script>



</script>



		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<title>Form Validation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Your name" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css' />


		<style>

footer{background-color:grey;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;      }


		</style>
	</head>
	

<body onload="document.registration.userid.focus();">  



<?php
$FnameErr = $LnameErr = $emailErr = $genderErr = $websiteErr = $addErr =  "";
$Fname = $Lname = $email = $gender = $comment = $website = $g = $a =$b=$c=$d = $e = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["FirstName"])) {
     $nameErr = "First Name is required";
   } else {
     $Fname = test_input($_POST["FirstName"]);
   }

   if (empty($_POST["LastName"])) {
     $nameErr = "Last Name is required";
   } else {
     $Lname = test_input($_POST["LastName"]);
   }

   
   if (empty($_POST["EMail"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["EMail"]);
   }
     
   if (empty($_POST["Phone"])) {
     $website = "";
   } else {
     $website = test_input($_POST["Phone"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["Address"])) {
     $addErr = "";
   } else {
     $addErr = test_input($_POST["Address"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }

   if (empty($_POST["button1"])) {
     $g = "Gender is required";
   } else {
     $g = test_input($_POST["button1"]);
   }
   if (empty($_POST["button2"])) {
     $a = "Nationality is required";
   } else {
     $a = test_input($_POST["button2"]);
   }
   if (empty($_POST["box1"])) {
     $b = " required";
   } else {
     $b = test_input($_POST["box1"]);
   }
   if (empty($_POST["box2"])) {
     $c = "required";
   } else {
     $c = test_input($_POST["box2"]);
   }
   if (empty($_POST["box3"])) {
     $d = "required";
   } else {
     $d = test_input($_POST["box3"]);
   }
   if (empty($_POST["box4"])) {
     $e = "required";
   } else {
     $e = test_input($_POST["box4"]);
   }

}
$myfile = fopen("myfilewrite.txt", "w") or die("Sorry Unable to open file!");
$t1 = $Fname;
$t11 = "\n1:The Entered field is:  \n";
fwrite($myfile,$t11);
fwrite($myfile,$t1);

$t21 = "\n! 2: The Entered field is:  \n";
$t2 = $Lname;

fwrite($myfile,$t21);
fwrite($myfile, $t2);
$t3 = $email;
$t31 = "\n! 3: The Entered field is:  \n";
fwrite($myfile,$t31);
fwrite($myfile, $t3);
$t10 = $website;
$t41 = "\n! 4: The Entered field is:  \n";
fwrite($myfile,$t41);
fwrite($myfile, $t10);
$t4 = $a;
$t44 = "\n! 5: The Entered field is:  \n";
fwrite($myfile,$t44);
fwrite($myfile, $t4);
$t5 = $g;
$t51 = "\n! 6: The Entered field is:  \n";
fwrite($myfile,$t51);
fwrite($myfile, $t5);
$t9 = $b;
$t91 = "\n! 7: The Entered field is:  \n";
fwrite($myfile,$t91);
fwrite($myfile, $t9);
$t6 = $c;
$t61 = "\n! 8: The Entered field is:  \n";
fwrite($myfile,$t61);
fwrite($myfile, $t6);
$t7 = $d;
$t71 = "\n! 9: The Entered field is:  \n";
fwrite($myfile,$t71);
fwrite($myfile, $t7);
$t8 = $e;
$t81 = "\n! 10: The Entered field is:  \n";
fwrite($myfile,$t81);
fwrite($myfile, $t8);
$t81 = "\n Comment: The On means that the selected button is true i.e: YES. ";
fwrite($myfile,$t81);

fclose($myfile);

function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>







<h1><b><div id="txt"></div></b></h1>

		
			<div class="clr"></div>
				
		<!-- Home -->
		<div id="home" class="panel">

			<div class="content">
				<h2>Home</h2>
				
				<p>I am a student of Computer Science and currently enrolled in Web Engineering!</p>
				<p>I Love to work and Love the web technologies!
Currently using the Google Chrome
I am in BSCS2 and skills are HTML css javascript and ajax. I have done many projects in Programming!<
p>i mostly work as a freelancer and give srvices related to the web and Mobile Apps. <br> And I love Google</p>

</p>
				
			</div>
		</div>
		<!-- /Home -->
		
		<!-- Portfolio -->
		<div id="portfolio" class="panel">
			<div class="content">
				<h2>Portfolio</h2>

				<p>Some really nice portfolio works done by me!</p>
				<ul id="works">
					<li><img src="images/1.jpeg" width="250"></li>
					<li><img src="images/2.jpeg" width="250"></li>
				</ul>
				<p class="footnote">I have done some Graphic designing projects like this!</p>
			</div>
		</div>
		<!-- /Portfolio -->
		
		<!-- About -->
		<div id="about" class="panel">
			<div class="content">
				<h2>Signup Form</h2>
	










<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<p><span class="error">* This is required field.</span></p>



<div>

  <div id="section3" class="label">


    <p>Personal Data</p>
  </div>
  <div class="elements">
    <p>
    <label for='FirstName'>First Name:</label>
    <input type="text" id="FirstName" name="FirstName" / required = "">
    <span class="error">* <?php echo $FnameErr;?></span>
</p>
<p>
    <label for='LastName'>Last Name:</label>
    <input type="text" id="LastName" name="LastName" /required = "">
<span class="error">* <?php echo $LnameErr;?></span>

</p>
<p>
    <label for='EMail'>Email:</label>
    <input type="email" id="EMail" name="EMail" /required = "">
     <span class="error">* <?php echo $emailErr;?></span>
</p>
<p>
    <label for='Phone'>Phone:</label>
    <input type="text" id="Phone" name="Phone" /required = "">
    <span class="error">*<?php echo $websiteErr;?></span>
</p>
<p>
    <label for='Address'>Address:</label>
    <textarea cols="20" rows="5" id="Address" name="Address"/required = ""></textarea>
    <span class="error">*<?php echo $addErr;?></span>

</p>
 
  </div>
</div>


  <div>

    <div id="section1" class="label">
      <p>Account Info</p>
    </div>
    <div id="section1b" class="elements">
      <input type="checkbox" name="box1" /> Student<br />
      <span class="error"><?php echo $b;?></span>
      <input type="checkbox" name="box2" /> 18+<br />
      <span class="error">*<?php echo $c;?></span>
      <input type="checkbox" name="box3" /> HBL Account Holder<br />
      <span class="error">*<?php echo $d;?></span>
      <input type="checkbox" name="box4" /> Muslim<br />
      <span class="error">*<?php echo $e;?></span>
      <input type="checkbox" name="box5" /> Urban Citizen<br />
     </div>
    </div>
  <div>

  <div id="section2" class="label">
    <p>Extra Info</p>
  </div>
  <div class="elements">

  	<p>
    <label for='Country'>City:</label>
    <select id="Country"  name="Country">
        <option value="000" selected="selected" /required = "">[choose yours ]</option>
        <option value="008">Islamabad</option>
        <option value="012">Lahore</option>
        <option value="016">Faisalabad</option>
        <option value="020">Karachi</option><br />
    </select>
</p>
  
    </br>

<p> Sex:</p><br />
    <input type="radio" name="button1" /> Male<br />
    <input type="radio" name="button1" /> Female<br />
  

    <p> Experience:</p><br />
    <input type="radio" name="button3" /> Yes<br />
    <input type="radio" name="button3" /> NO<br />
    <span class="error">*<?php echo $g;?></span>
   
   <p> Pakistani:</p><br />
    <input type="radio" name="button2" /> Yes<br />
    <input type="radio" name="button2" /> No<br />
     <span class="error">*<?php echo $a;?></span>


   <p>

    <input type="submit" name="submit" value="Submit">
</p>

  </div>
</div>


</form>



			</div>
		</div>
		<!-- /About -->
		
		<!-- Contact -->
		<div id="contact" class="panel">
			<div class="content">
				<h2>Contact</h2>
				<p>Contact me on following Address:</p>
				<Section>
<h1>Address:</h1>
<p>Razi 1 Hostels Nust H-12 Islamabad</p>

</section>
				<form id="form">
					<p><label>Your Name</label><input type="text" /></p>
					<p><label>Your Email</label><input type="text" /></p>
					<p><label>Your Message</label><textarea></textarea></p>

					<div class="button">
        <button type="submit">Send your message</button>
    </div>
				</form>
			</div>
		</div>
		<!-- /Contact -->

		<!-- Header with Navigation -->
		<div id="header">
			<h1>Form Validation..!</br>Signup The Form</h1>

			<ul id="navigation">
				<li><a id="link-home" href="#home">Home</a></li>
				<li><a id="link-portfolio" href="#portfolio">Portfolio</a></li>
				<li><a id="link-about" href="#about">SignUp Form</a></li>
				<li><a id="link-contact" href="#contact">Contact</a></li>
			</ul>
			



<script type="text/javascript">



var elements = document.getElementsByTagName("div");

// collapse all sections
for (var i = 0; i < elements.length; i++) 
{
  if (elements[i].className == "elements") 
  {
    elements[i].style.display="none";
  } else if (elements[i].className == "label") 
  {
    elements[i].onclick=switchDisplay;
  }
}

//collapse or expand depending on state
function switchDisplay() {

  var parent = this.parentNode;
  var target = parent.getElementsByTagName("div")[1];

  if (target.style.display == "none") {
    target.style.display="block";
  } else {
    target.style.display="none";
  }
  return false;
}


 var frmvalidator = new Validator("myform");
 frmvalidator.addValidation("FirstName","req","Please enter your First Name");
 frmvalidator.addValidation("FirstName","maxlen=20",
        "Max length for FirstName is 20");
 
 frmvalidator.addValidation("LastName","req");
 frmvalidator.addValidation("LastName","maxlen=20");
 
 frmvalidator.addValidation("Email","maxlen=50");
 frmvalidator.addValidation("Email","req");
 frmvalidator.addValidation("Email","email");
 
 frmvalidator.addValidation("Phone","maxlen=50");
 frmvalidator.addValidation("Phone","numeric");
 
 frmvalidator.addValidation("Address","maxlen=50");
 frmvalidator.addValidation("Country","dontselect=000");


</script>

<footer>

CopyRights @ Manzar Ali

</footer>



		</div>




	</body>
</html>
