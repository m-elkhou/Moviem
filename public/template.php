<!DOCTYPE html >
<html >
<head>
<title>Movie</title>

<link href="public/style.css" rel="stylesheet" type="text/css" />
<script src="public/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="public/js/cufon-yui.js" type="text/javascript"></script>
<script src="public/js/cufon-replace.js" type="text/javascript"></script>
<script src="public/js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="public/js/script.js" type="text/javascript"></script>

</head>
<body id="page1">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- HEADER -->
			<div id="header">
				<div class="row-1">
					<div class="fleft"><a "index.php?action=vHome" >Movie</a></div>
					<ul>
						<li><a href="index.php?action=vHome" ><img src="images/icon1-act.gif" alt="" /></a></li>
						<li><a href="index.php?action=vAbout" ><img src="images/icon2.gif" alt="" /></a></li>
						<li><a href="index.php?action=vList" ><img src="images/icon3.gif" alt="" /></a></li>
					</ul>
				</div>
				<div class="row-2">
					<ul>
						<li><a href="index.php?action=vHome" <?php echo $H; ?> >Accueil</a></li>
						<li><a href="index.php?action=vList" <?php echo $L; ?> >Liste</a></li>
						<li><a href="index.php?action=vConection" <?php echo $M; ?> >Manager</a></li>
						<li><a href="index.php?action=vInscription.php" <?php echo $I; ?> >Inscription</a></li>
						<li class="last"><a href="index.php?action=vAbout" <?php echo $A; ?> >Infos</a></li>
					</ul>
				</div>
			</div>
<!-- CONTENT -->
			<div id="content">
				<?php echo $page; ?> 
			</div>
<!-- FOOTER -->
			<div id="footer">
				<div class="left">
					<div class="right">
						<div class="inside">Copyright - Mohammed EL KHOU and Mohammed KASIMI
						</div>
					</div>
				</div>
			</div>
			
<!--			-->
		</div>
	</div>
</div>
			
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>