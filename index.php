<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Paola Anderson</title>
		<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="fixed.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>


<body data-spy="scroll" data-target="#navbarResponsive">

	<!-- on click button from javaScript class-->
	<p id="demo"> </p>
	<!-- end of button-->

	<!-- start home section-->
	<div id="home">

	</div>
	<!-- end home section -->

	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
			<button onclick="myFunction()"> Click Me </button>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#home">Home</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#education">Education</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#skills">Skills</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#experience">Experience</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#references">References</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End navigation -->
	<!--start landing page section-->
	<div class="landing">
		<div class="home-wrap">
			<div class="home-inner">
			</div>
		</div>
	</div>

	<div class="caption text-center">
		<h1> Welcome to my Page</h1>


	</div>
	<!--end landing page section-->

	<!-- sections -->

	<!-- start about section-->
	<div id="about" class="offset">
		<div class=" col-12 narrow text-center">
			<h1> Meet Paola </h1>
			<div class="col-4  mx-auto">
				<img src="img/profilepic.jpg" class="rounded-circle   img-thumbnail" alt="profilepic">
			</div>
			<hr>
			<p class="lead"> 
				Located in Salt Lake City, Paola is a former professional photgrapher turned Web developer. Passionate about creating user friendly and aesthetically pleasing web-pages.
				
				 
			</p>
			<hr>
		</div>
	</div>
	<!-- end about section -->

	<!-- start education section-->
	<div id="education" class="offset">
		<!--Start jumbotron-->
		<div class="jumbotron ">

			<div class="col-12 narow  text-center">
				<h3 class="heading">Education</h3>
				<div class="heading-underline"></div>
			</div>
			<div class="row">
				<div class="col-md-6 education">
					<div class="row">
						<div class="col-md-6">
							<h6>Utah Valley University</h6>
							<hr class="education-hr">
							<p>Art and Design - May 2019</p>
						</div>
					</div>


				</div>

				<div class="col-md-6 education">
					<div class="row">
						<div class="col-md-8">
							<h6>Salt Lake Community College</h6>
							<hr class="education-hr">
							<p>Web desing and Development - 2019</p>
						</div>
					</div>


				</div>

			</div>
			<!--end of row-->

		</div>
		<!--Start jummbotron-->
	</div>
	<!-- end education section -->

	<!-- start skills section-->
	<div id="skills" class="offset">
   
	<div  class="fixed-background">
		<div class="row dark text-center">
			<div class="col-12">
				<h3 class="heading skills">Skills</h3>
				<div class="heading-underline"></div>
			</div>

			<div class="col-md-4">
				
				<div class="feature">
					<i class="fas fa-code fa-2x"></i>
				</div>
				<h4>HTML 5</h4>
			</div>

			<div class="col-md-4">
					
					<div class="feature">
						<i class="fas fa-bold fa-2x"></i>
					</div>
					<h4>BOOTSTRAP</h4>
			</div>

			<div class="col-md-4">
					
					<div class="feature">
						<i class="fab fa-css3 fa-2x"></i>
					</div>
					<h4>CSS 3</h4>
			</div>

			<div class="col-md-4">
					
					<div class="feature">
						<i class="fab fa-js fa-2x"></i>
					</div>
					<h4>JavaScript</h4>
			</div>

			<div class="col-md-4">
					
					<div class="feature">
						<i class="fab fa-wordpress-simple fa-2x"></i>
					</div>
					<h4>Wordpress</h4>
			</div>

			<div class="col-md-4">
					
					<div class="feature">
						<i class="fab fa-adobe fa-2x"></i>
					</div>
					<h4>Photoshop</h4>
			</div>

		</div><!--end row dark-->
		
		<div class="fixed-wrap">
			<div class="fixed">
         	</div>

		</div>
		
	</div> <!-- end of fixed background-->
	
	</div>


	<!-- end skills section -->


	<!-- start experience section-->
	<div id="experience" class="offset">


	</div>



	<!-- end experience section -->

	<!-- start references section-->
	<!--<div id="references" class="offset">
		<script>
			$(document).ready(function(){
				$("#refbutton").click(function(){
					$("#reftable").toggle();
				});
			});
        </script>
        -->

		<div class="container text-center">
			<h2> References</h2>
			<button id="refbutton">Click to hide or show references </button>
			<table id="reftable" class="table">
				<thead class="thead-light">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone #</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mary</td>
						<td>mary@gmail.com</td>
						<td>111-111-1111</td>
					</tr>
					<tr>
						<td>Jess</td>
						<td>jess@gmail.com</td>
						<td>222-222-2222</td>
					</tr>
					<tr>
						<td>Joe</td>
						<td>joe@gmail.com</td>
						<td>333-333-3333</td>
					</tr>
				</tbody>
				</tbody>

			</table>
		</div>
	</div>
	<!-- end references section -->

	<!-- start contact section-->
	<div id="contact" class="offset text-center">
		<section id="contact" class="content-section text-center">
			<div class="contact-section">
				<div class="container">
					<h2>Let's get in touch!</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="exampleInputName2">Name</label>
									<input type="text" class="form-control" id="exampleInputName2"
										placeholder="name">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail2">Email</label>
									<input type="email" class="form-control" id="exampleInputEmail2"
										placeholder="email">
								</div>
								<div class="form-group ">
									<label for="exampleInputText">Your Message</label>
									<textarea class="form-control" placeholder="text"></textarea>
								</div>
								<button type="submit" class="btn btn-default">Send Message</button>
							</form>

							<hr>

						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- end contact section -->


	<!--start footer-->
	
	
	<!--start footer-->

		<div id="footer" class="offset">
			<footer>
				<div class="row justify-content-center">
					<div class="cold-md-3 text-center">
						
						<p id="list"></p>
						
						<strong>Salt Lake City, UT</strong>
						<p>(888)888-8888<br> paola@gmail.com</p>
						<a href="https://www.linkedin.com/in/paola-anderson-84b6aa147/" target="_blank"><i class=" fab fa-linkedin x4"></i></a>
						<hr>
					</div>
				</div>
			</footer>
        </div>
        
<?php
    $skills = [
    "HTML",
    'Javascript',
    'PHP',
    'Wordpress',
    'Photoshop'
];

    print '<ul>';
    foreach ($skills as $skill) {
    print '<li>'.$skill.'</li>';

    }
    print '</ul>'
?>



	<!-- button script-->
	<script>

			// function getMessage() {
			// 	var date = new Date();
			// 	var hour = date.getHours();

			// 	if (hour >= 5 && hour <=12){
			// 		return 'Good Morning!';
			// 	}
			// 	else if ( hour >12 && hour <18) {
			// 		return 'Good Afternoon!';
			// 	}
			// 	else {
			// 		return 'Good Evening!';
			// 	}
			// }

		

			// function myFunction(){
				
			// 	var person = prompt("Please enter your email");
			// 	var welcomeMessage = getMessage();
			// 	var txt;
			// 	if (person == null || person == "") {
			// 		txt= "User cancelled the prompt.";
			// 	}else{ 
			// 		txt= "Hello " + person + "! Thank You for reviewing my resume site";
			// 	} 
			// 	document.getElementById("demo").innerHTML = txt;
			 //}

			 function getMessage() {
				var date= new Date();
				var hour = date.getHours();
				if (hour >= 5 && hour < 12) {
				return "Good morning! "

				}
					else if (hour > 12 && hour <= 18) {
				return "Good afternoon! "
				}

				else {
				return "Good evening! "
				}
				}
			function myFunction() {

			var person = prompt("Please enter your name:");
			var welcomeMessage = getMessage();
			var txt;
			if (person == null || person == "") {
			txt= "User cancelled the prompt.";
			} else {
		txt= welcomeMessage + person + " Thank You for reviewing my resume site";
			}
		document.getElementById("demo").innerHTML=txt;
			}
	</script>

	<!-- bullet list start-->
	<script>



			let ref = ["Salt Lake City, Ut", "888-888-8888", "paola@gmail.com"  ];
			rLen = ref.length;
		   
		   text = "<ul>";
		   for (i = 0; i < rLen; i ++) {
		   text += "<li>" + ref[i] + "</li>";
		   }
		   
		   text += "</ul>";
		  
		  
		  document.getElementById("list").innerHTML = text;
		  
		  </script>
		  

	<!-- end of bullet list-->
	<!-- end of button script-->

	<!--- Script Source Files -->
	
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>



</body>

</html>