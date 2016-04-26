<?php

echo <<<_END
<html>
<head>
  <meta charset="utf-8">	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' id='bootstrap' href='css/bootstrap/bootstrap.css' type='text/css'>
  <link rel='stylesheet' id='bootstrap' href='css/bootstrap/custombs.css' type='text/css'>
  <link rel='stylesheet' id='jc-css'  href='css/jc-css.css' type='text/css' media='all' />
  <link rel='stylesheet' id='jc-print-css'  href='css/header.css' type='text/css' media='print' />
  <link rel='stylesheet' id='jc-font-open-sans-css'  href='css/fonts.css' type='text/css' media='all' />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <header>

<div id="borderTop">
    <div id="banner">
		<a href="http://www.jccmi.edu">
			<img id="logo" src="css/Jc_Logo.png">
		</a>
    </div>
</div>
<nav>

    <li><button type="button">Sign Out</button></li>


</nav>
</head>

<body>
		<table align="center" style="width:100%;padding-top:500px;background-color:transparent;border-style:none;">
			<tr>
				<td><a href="Pathways_Fall.php"><button class="btn btn-primary btn-lg btn-block">Winter</button></a></td>
			</tr>
			<tr style="background-color:transparent;">
				<td><a href="Pathways_Spring.php"><button class="btn btn-primary btn-lg btn-block">Spring</button></a></td>
			</tr>
			<tr>
				<td><a href="Pathways_Winter.php"><button class="btn btn-primary btn-lg btn-block">Fall</button></a></td>
			</tr>
		</table>
</body>
</html>
_END;
?>