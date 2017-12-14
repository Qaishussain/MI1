<?php require_once('../Connections/Connection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_Connection, $Connection);
$query_Recordset1 = "SELECT * FROM tekoop";
$Recordset1 = mysql_query($query_Recordset1, $Connection) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="../Images/favicon.png">
	<title>Te koop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

				<li><a href="overons.html">Over ons</a></li>
			</ul>
		</nav>
	</header>
	<section id="main">
		<div class="inner">
			<section class="wrapper style1">
				<header class="special">
					<h2>Te koop</h2>
				</header>
				<p>Ontdek onze te koop modellen hieronder die we in stock heb staan, met de nodige technische informatie en foto's.<br>Heb je vragen over één van deze modellen kan je me steeds bereiken via mail of telefoon.</p>
                <table width="427%">
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
	    <?php do { ?>
        <tr>
        <th>
        <?php
         echo'<img src="'.$row_Recordset1['image'].'" width="300" height="200" />'; ?></a></th>
          <td><?php echo $row_Recordset1['merk_model']; ?></td>
          <td><?php echo $row_Recordset1['prijs']; ?></td>
          <td><?php echo $row_Recordset1['bouwjaar']; ?></td>
          <td><?php echo $row_Recordset1['kilometerstand']; ?></td>
           <td><?php echo $row_Recordset1['statut']; ?></td>
        </tr>
	      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
      </tbody>
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
<?php
mysql_free_result($Recordset1);
?>
