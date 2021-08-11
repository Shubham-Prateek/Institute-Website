<!Doctype html>
<html>
	<head>
<?php
include 'style2.php';
include 'links.php';
?>
		<title > SRC Computer </title>
		<link rel="stylesheet" type="text/css" href="css.php">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		
	</head>


	<body onload="myFunction()">
		<button id="bttop">
			<i class="fas fa-chevron-up"></i>
             
			
		</button>
		
<script type="text/javascript">
			const bttop=document.querySelector("#bttop");
			bttop.addEventListener("click",function(){
				window.scrollTo({
					top:0,
					left:0,
					behavior:"smooth"
					
				});
			

			
</script>

<script >
	function myFunction(){
		var x=document.getElementById("menu2");
		if(x.style.left != "100%")
		{
			x.style.left= "100%";
			
		}
		else
		{
			x.style.left=0;
		}
		}
		
		

	
	
</script>





		<nav id="menu" >
			<div class="containermenu" >
			<img id="imag" src="img\cc2.png" >
			<ul id="menu2" >
				
				<li class="active"><a href="#s1">Home</a></li>
				<li><a href="#s21">Cources</a></li>
				<li><a href="#s3">Faculty</a></li>
				<li><a href="#footer">Footer</a></li>
			</ul>
			<label id="icon" onclick="myFunction()">
				<i class="fas fa-bars fa-2x"></i>
			</label>
			</div>
			
		</nav>






<!--first section-->
		<section id="s1"  >
			
			
			<div  id="s1d1" >
			
		
				<div class="s1dd1"  >

					<h1>SRC</h1>
					<h1>COMPUTER,</h1>
					<h1 id="katihar">KATIHAR</h1>
					<h2 style="color:#fff; padding: 5px 0";>Computer Education,<br>NSDC Skills Tanning, Hardware knowledge both <br>chip level as well as component level.<br>literate computer IT education<br> to all public/student...</h2>
					
				
					<a href="#s21" type="Button" class='btn'>Cources</a>
				</div>
				
			</div>
		</section>
<!-- end first section-->
















<!--new 2nd dummy -->


<section id="s21">
	<h1>Cources</h1>
	<div class="container">
		<div class="row">
			<div class="column">
				<h2>Unversity cources(Computers)</h2>
				<ul >
					<li><a href="cources.php#ss1">BCA</a></li>
					<li><a href="cources.php#ss1">MCA</a></li>
					
				</ul>
				
			</div>
			<div class="column">
				<h2>Unversity cources(Commerce)</h2>
				<ul >
					<li><a href="cources.php#ss2">BBA</a></li>
					<li><a href="cources.php#ss2">MBA</a></li>
					
				</ul>
				
			</div>
			<div class="column">
				<h2>Unversity cources(Arts)</h2>
				<ul >
					<li><a href="cources.php#ss3">B.A.</a></li>
					<li><a href="cources.php#ss3">M.A.</a></li>
					
				</ul>
				
			</div>
			<div class="column">
				<h2>Unversity cources(Others)</h2>
				<ul >
					<li><a href="cources.php#ss4" >B.Sc</a></li>
					<li><a href="cources.php#ss4">M.Sc</a></li>
					<li><a href="cources.php#ss4">B.Ed</a></li>
					<li><a href="cources.php#ss4">M.Ed</a></li>
				</ul>
				
			</div>
			<div class="column">
				<h2>Computer Language</h2>
				<ul >
					<li><a href="cources.php#ss5">C Language</a></li>
					<li><a href="cources.php#ss5">C++</a></li>
					<li><a href="cources.php#ss5">Java</a></li>
					<li><a href="cources.php#ss5">Python</a></li>
				</ul>
				
			</div>
			<div class="column">
				<h2>Web Development</h2>
				<ul >
					<li><a href="cources.php#ss6">HTML</a></li>
					<li><a href="cources.php#ss6">CSS</a></li>
					<li><a href="cources.php#ss6">Java Script</a></li>
					<li><a href="cources.php#ss6">Php</a></li>
				</ul>
				
			</div>
			<div class="column">
				<h2>MS Office</h2>
				<ul >
					<li><a href="cources.php#ss7">MS Powerpoint</a></li>
					<li><a href="cources.php#ss7">MS Word</a></li>
					<li><a href="cources.php#ss7">MS Exel</a></li>
					
				</ul>
				
			</div>
			
			
			
			<div class="column">
				<h2>Other Courcecs</h2>
				<ul>
					<li><a href="cources.php#ss8">Android Programming</a></li>
					<li><a href="cources.php#ss8">Java Product Development</a></li>
					<li><a href="cources.php#ss8">Skill Development</a></li>
					<li><a href="cources.php#ss8">desktop Computing</a></li>
				</ul>
				
			</div>
			<div class="column">
				<h2>Computer cources</h2>
				<ul>
					<li><a href="cources.php#ss9">DBMS/RDBMS</a></li>
					<li><a href="cources.php#ss9">Operating System</a></li>
					<li><a href="cources.php#ss9">Data Struccture</a></li>
					<li><a href="cources.php#ss9">Numerical Methods</a></li>
				</ul>
				
			</div>
			<div class="column">
				<h2 >Designing</h2>
				<ul >
					<li><a href=cources.php#ss10>Photoshop</a></li>
					<li><a href="cources.php#ss10">Illustrator</a></li>
					<li><a href="cources.php#ss10">Corel Draw</a></li>
					<li><a href="cources.php#ss10">Indesign</a></li>
				</ul>
				
			</div>





		</div>


	</div>
</section>










<!-- end 2nd dummy -->





<!--third section-->
		<section id="s3" >
			<h1 >Faculty</h1>
			
		<div id="container">
			<div class="indicator">
				<span class="btn2 active"></span>
				<span class="btn2"></span>
				<span class="btn2"></span>
				<span class="btn2"></span>
				
			</div>
			<div class="testimonial">
			<div class="row" id="slide">
				<div class="column">
					<div class="text">
						<h2>NAME:</h2>
						<p> Sanjeev Jaishwal</p>
						<h2>SUBJECT:</h2>
						<p> C++, Data Structure,</p>
						<p> Web Development,MS Word </p>
						<h2>Contact Info:</h2>
						<p>+91xxxxxxxxxx</p><br>
						<h3>Founder of SRC Computer</h3>
					</div>
					<div class="image">
						<img src="img/3.jpg" style="height: 200px;width: 200px">
					</div>
				</div>
				<div class="column">
					<div class="text">
						<h2>NAME:</h2>
						<p> Rajesh Kumar</p>
						<h2>SUBJECT:</h2>
						<p>Operating System,</p>
						<p> raphics,SQL </p>
						<h2>Contact Info:</h2>
						<p>+91xxxxxxxxxx</p><br>
						<h3>Faculty member at SRC Computer</h3>
					</div>
					<div class="image">
						<img src="img/3.jpg" style="height: 200px;width: 200px">
					</div>
				</div>
				<div class="column">
					<div class="text">
						<h2>NAME:</h2>
						<p> Sanjeev Jaishwal</p>
						<h2>SUBJECT:</h2>
						<p> C++, Data Structure,</p>
						<p> Web Development,MS Word </p>
						<h2>Contact Info:</h2>
						<p>+916644667733</p><br>
						<h3>Founder of SRC Computer</h3>
					</div>
					<div class="image">
						<img src="img/3.jpg" style="height: 200px;width: 200px">
					</div>
				</div>
				<div class="column">
					<div class="text">
						<h2>NAME:</h2>
						<p> Sanjeev Jaishwal</p>
						<h2>SUBJECT:</h2>
						<p> C++, Data Structure,</p>
						<p> Web Development,MS Word </p>
						<h2>Contact Info:</h2>
						<p>+916644667733</p><br>
						<h3>Founder of SRC Computer</h3>
					</div>
					<div class="image">
						<img src="img/3.jpg" style="height: 200px;width: 200px">
					</div>
				</div>
			</div>
			</div>

		</div>
			<script >
					
			
		
			var btn=document.getElementsByClassName("btn2");
			var slide= document.getElementById("slide");
			var i=0;
				btn[0].onclick=function(){
					slide.style.transform="translateX(-20px)";
					for ( i = 0; i <4; i++) {
						btn[i].classList.remove("active");
					}
					this.classList.add("active");
				}
				btn[1].onclick=function(){
					slide.style.transform="translateX(-600px)";
					for ( i = 0; i <4; i++) {
						btn[i].classList.remove("active");
					}
					this.classList.add("active");
				}
				btn[2].onclick=function(){
					slide.style.transform="translateX(-1200px)";
					for ( i = 0; i <4; i++) {
						btn[i].classList.remove("active");
					}
					this.classList.add("active");
					
				}
				btn[3].onclick=function(){
					slide.style.transform="translateX(-1800px)";
					for ( i = 0; i <4; i++) {
						btn[i].classList.remove("active");
					}
					this.classList.add("active");
					
				}	
				
				
			</script>
			
			

		</section >
		
<!--end third section-->



<!--fourth section-->
		
<!--end fourth section-->
<!-- footer-->

<footer class="footer" id="footer">
	<div class="container">
		<div class="row">
			<div class="column">
				<h2>About SRC </h2>
				<p style="color:#fff; padding: 5px 0">Computer Education,<br>NSDC Skills Tanning, Hardware knowledge both chip level as well as component level.<br>literate computer IT education to all public/student...<br>Dot.NET 2012, J2EE,JAVA,C/C++, PHP,ANDROID PROGRAMMING..
AND ALL NSDC SKILLS PROGRAM</p>
				
				
			</div>
			<div class="column">
				<h2>Important Links</h2>
				<ul>
					<li><a href="cources.php">Our Cources</a></li>
					<li><a href="registration1.php">Enroll in our programe</a></li>
					<li><a href="#s3">Faculty membebrs</a></li>
					<li><a href="https://www.google.com/maps/place/SRC+(SoftWeb+Research+Center)+Computer+,Katihar+854105/@25.5441633,87.5747888,17z/data=!4m12!1m6!3m5!1s0x39faa981a423e873:0x269e531ab36be688!2sSRC+(SoftWeb+Research+Center)+Computer+,Katihar+854105!8m2!3d25.5441633!4d87.5769775!3m4!1s0x39faa981a423e873:0x269e531ab36be688!8m2!3d25.5441633!4d87.5769775">Reach us</a></li>
				</ul>
				
			</div>
			<div class="column">
				<h2>Contact us</h2>
				<ul>
					<li><a href="registration1.php">Talk to our representative</a></li>
					<li><a href="#">Regester for our cources</a></li>
					<li><a href="#">about us</a></li>
					<li><a href="#">about us</a></li>
				</ul>
				
			</div>
			<div class="column">
				<h2 >Follow Us</h2>
				<ul >
					
					<a href="https://www.facebook.com/pg/srckatihar/services/"><li class="social"><i class="fa fa-facebook fa-2x" aria-hidden="true" fa-3x"></i></li></a>
					<a href="#"><li class="social"><i class="fa fa-twitter fa-2x" aria-hidden="true""></i></li></a>
					<a href="#"><li class="social"><i class="fa fa-linkedin fa-2x" aria-hidden="true" fa-3x"></i></li></a>
				</ul>
				
			</div>





		</div>


	</div>
</footer>

<!--end footer-->



		
	</body>

</html>