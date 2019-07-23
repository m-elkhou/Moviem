<?php ob_start(); ?>
<div id="slogan">
	<div class="image png"></div>
		<div class="inside">
			<h2>nouvelle Experience </h2>
			<p>CineTown vous faire vivre une éxperience cinéma spéctaculaire</p>						<p>Chez cinetown ne rattez plus les actualités du cinéma</p>
            <input type="button" value="Connectez vous" onClick="location.href='index.php?action=vConection'">
		</div>
</div>
				
<!--<div class="content">-->

	<h3><span>Films</span> à l'affiche</h3>
	
	<ul class="movies">
		
		<?php if($row = $resultat->fetch()){ ?>
		<li>
			<h4 align="center"><span><?php echo $row["title"]; ?></span></h4>
			<img src=<?php echo $row["img"]; ?> alt="" width="280" height="180"/>
			<p><?php echo $row["abstract"]; ?></p>
			<div class="wrapper">
				<a href="index.php?action=Desc&id=<?php echo $row["id"] ?>" class="link2"><span><span>voir plus</span></span></a>
			</div>
		</li>
		
		<?php } if($row = $resultat->fetch()){ ?>
		<li>
			<h4 align="center"><span><?php echo $row["title"]; ?></span></h4>
			<img src=<?php echo $row["img"]; ?> alt="" width="280" height="180"/>
			<p><?php echo $row["abstract"]; ?></p>
			<div class="wrapper">
				<a href="index.php?action=Desc&id=<?php echo $row["id"] ?>" class="link2"><span><span>voir plus</span></span></a>
			</div>
		</li>
		
		<?php } if($row = $resultat->fetch()){ ?>
		<li>
			<h4 align="center"><span><?php echo $row["title"]; ?></span></h4>
			<img src=<?php echo $row["img"]; ?> alt="" width="280" height="180"/>
			<p><?php echo $row["abstract"]; ?></p>
			<div class="wrapper">
				<a href="index.php?action=Desc&id=<?php echo $row["id"] ?>" class="link2"><span><span>voir plus</span></span></a>
			</div>
		</li>
		<?php } ?>
		<li class="clear">&nbsp;</li>
	</ul>
	
<!--</div>-->
<?php $page=ob_get_clean(); ?>