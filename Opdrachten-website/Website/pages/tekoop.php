
<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="../Images/favicon.png">
	<title>Te koop</title>
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
					<h2><br>Te koop</h2>
				</header>
				<p>Ontdek onze te koop modellen hieronder die we in stock heb staan, met de nodige technische informatie en foto's.<br>Heb je vragen over deze modellen kan je ons steeds bereiken via mail of bellen.</p><br>
   
                
      <table>
	  <thead>
	    <tr>
       
	      <th>Image</th>
	      <th>Merk/Model</th>
	      <th>Prijs</th>
	      <th>Bouwjaar</th>
	      <th>Kilometerstand</th>
          <th>Statut</th>
        </tr>
      </thead>
	  <tbody>
        <tr>
                     <?php try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=localhost;dbname=id3972295_lavenir","id3972295_qais","143DMC54726q");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

   
    
    // mysql query to insert data

    $pdoQuery = "SELECT * FROM tekoop";
    $pdoResult = $pdoConnect -> prepare($pdoQuery);
		$pdoResult -> execute();
		$res = $pdoResult -> fetchAll(PDO::FETCH_ASSOC);
  foreach($res as $row){
    
?>
          <th> <?php
         echo'<img src="'.$row['image'].'" width="300" height="200" />'; ?>
            </a></th>
          <td><?php echo $row['merk_model'] ;?></td>
          <td><?php echo $row['prijs'] ;?> Euro</td>
          <td><?php echo $row['bouwjaar'] ;?></td>
          <td><?php echo $row['kilometerstand'] ;?></td>
          <td><?php echo $row['statut'] ;?></td>
        </tr>
      </tbody>
      <?php
  }
	 ?>
</table>

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
	
</body>
</html>