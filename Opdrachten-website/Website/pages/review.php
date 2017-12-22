<?php

if(isset($_POST['MM_insert']))
{
    try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=localhost;dbname=id3972295_lavenir","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    // get values form input text and number
    $name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
   

    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `review`(`naam`,`email`,`comment`) VALUES (:name,:email,:message)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":name"=>$name , ":email"=>$email, ":message"=>$message));
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}


?>
<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="../Images/favicon.png">
	<title>Recensie</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
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
					<h2><br>Recensie</h2>
					<details><p>Ontdek alle recente recensies over website. Als jij graag feedback wilt geven aarzel dan niet scrol naar bineden.</p></details>
				</header>
                
                  <?php try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=localhost;dbname=id3972295_lavenir","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

   
    
    // mysql query to insert data

    $pdoQuery = "SELECT * FROM review";
    $pdoResult = $pdoConnect -> prepare($pdoQuery);
		$pdoResult -> execute();
		$res = $pdoResult -> fetchAll(PDO::FETCH_ASSOC);
  foreach($res as $row){
    
?>
            
 <h3>Naam: <?php echo $row['naam'] ;?></h3>
 <h3>Feedback: </h3>
 <p><?php echo $row['comment'] ;?></p><br>

 <?php 
 
  }
 ?>
 <header class="special">
					<h2>Feedback </h2>
				</header>
 <div id="form-main">
					<div id="form-div">
						<form name="form1" action = "" method="POST" class="form" id="form1">

							<p class="name">
								 <label for="name">Naam</label>
								<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Naam" id="name" />
								<span class="error"><p id="name_error"></p></span>
							</p>

							<p class="email">
								 <label for="email">email</label>
								<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
								<span class="error"><p id="email_error"></p></span>
							</p>

							<p class="text">
								 <label for="comment">commentaar</label>
								<textarea name="message" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Commentaar"></textarea>
								<span class="error"><p id="comment_error"></p></span>
							</p>
					  <div class="submit">
								<input type="submit" value="SEND" id="button-black" />
								<div class="ease"></div>
							</div>
					  <input type="hidden" name="MM_insert" value="form1">
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
    var y = document.forms["form1"]["email"].value;
    var z = document.forms["form1"]["comment"].value;

    var submit = true;

    if (x == null || x == "") {
        nameError = "Gelieve u naam in te geven.";
        document.getElementById("name_error").innerHTML = nameError;
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
document.getElementById("email").onkeyup = removeWarning;
document.getElementById("comment").onkeyup = removeWarning;
</script>
</body>
</html>
