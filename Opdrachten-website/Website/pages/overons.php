<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="../Images/favicon.png">
	<title>Over ons</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/TemplateCss.css">
</head>

<body>
	<header>
	<nav class="fixed-to-top">
			<div>
				<h1><a href="../index.html"><img src="../Images/logo.png" alt="logo l'avenir"></a></h1>

			</div>
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Producten &amp; diensten</a>
					<div class="dropdown-content">
						<a href="autokeuring.html">Auto keuring</a>
						<a href="airco.html">Aircoservice</a>
						<a href="onderhoud.html">Onderhoud volgens het boekje</a>
					</div>
				</li>
				<li><a href="tekoop.php">Te koop</a></li>
				<li><a href="review.php">Recensie</a>
				</li>
				
					<li><a href="overons.php">Over ons</a></li>
			</ul>
		</nav>
	</header>
	<section id="main">
		<div class="inner">
			<section class="wrapper style1">
			    <header class="special">
					<h2><br>Locatie</h2>
				</header>
                <div class="google-maps">
                <div class="map-responsive">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.977463768083!2d5.469601415547078!3d50.590372185154244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f8d52b6bf427%3A0x26b18f423520663e!2sChauss%C3%A9e+d&#39;Ivoz+147%2C+4400+Fl%C3%A9malle!5e0!3m2!1snl!2sbe!4v1513948924685" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
                </div>
				<header class="special">
					<h2>Over ons</h2>
				</header>
				<p>Als u vragen hebt aarzel dan niet om te contacteren</p>
                <div id="form-main">
					<div id="form-div">
						<form name="form1" action="contact.php" method="POST" class="form" id="form1">

							<p class="name">
								<input name="yourname" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
                                <span class="error"><p id="name_error"></p></span>
							</p>
                           
						<p class="text">
								<input name="subject" type="text" class="validate[required,custom[onlyLetter]] feedback-input" id="subject" placeholder="Subject" />
                                <span class="error"><p id="subject_error"></p></span>
							</p>
							<p class="email">
								<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                                <span class="error"><p id="email_error"></p></span>
							</p>

							<p class="text">
								<textarea name="comments" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message"></textarea>
                                <span class="error"><p id="comment_error"></p></span>
							</p>
					  <div class="submit">
								<input type="submit" value="SEND" name="submit" id="button-black" />
								<div class="ease"></div>
							</div>
					 
                        </form>
				  </div>
				</div>

			</section>
		</div>
	</section>
	<footer>
		<section id="lab_social_icon_footer">
			<a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social" ></i></a>
			<a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
			<a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
			<a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
			<h2>Made with love by Qais Hussain &copy; 2017 </h2>
		</section>
	</footer>
    	<script>
document.getElementById("form1").onsubmit = function () {
    var x = document.forms["form1"]["name"].value;
	var q = document.forms["form1"]["subject"].value;
    var y = document.forms["form1"]["email"].value;
    var z = document.forms["form1"]["comment"].value;
	 
    var submit = true;

    if (x == null || x == "") {
        nameError = "Gelieve u naam in te geven.";
        document.getElementById("name_error").innerHTML = nameError;
        submit = false;
    }
	 if (q == null || q == "") {
        subjectError = "Gelieve u subject in te geven.";
        document.getElementById("subject_error").innerHTML = subjectError;
        submit = false;
    }

    if (y == null || y == "") {
        emailError = "Gelieve u email adres in te geven.";
        document.getElementById("email_error").innerHTML = emailError;
        submit = false;
    }

    if (z == null || z == "") {
        commentError = "Gelieve feedback te schrijven";
        document.getElementById("comment_error").innerHTML = commentError;
        submit = false;
    }
	

    return submit;
}

function removeWarning() {
    document.getElementById(this.id + "_error").innerHTML = "";
}

document.getElementById("name").onkeyup = removeWarning;
document.getElementById("subject").onkeyup = removeWarning;
document.getElementById("email").onkeyup = removeWarning;
document.getElementById("comment").onkeyup = removeWarning;
</script>
</body>
</html>