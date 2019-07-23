<?php ob_start(); ?>

	<h3><span>Films</span> à l'affiche</h3>
	
	<?php  while ($row = $resultat->fetch()) { ?>
	
	<ul class="movies">
		
		<li>
			<h3 align="center"><span><?php echo $row["title"]; ?></span></h3>&nbsp;&nbsp;
			<img src=<?php echo $row["img"]; ?> alt="" width="280" height="180"/>
			<p><?php echo $row["abstract"]; ?></p>
			<div class="wrapper">
				<a href="index.php?action=Desc&id=<?php echo $row["id"] ?>" class="link2"><span><span>voir plus</span></span></a>
			</div>
		</li>
		
		<?php  if($row = $resultat->fetch()){ ?>
		<li>
			<h3 align="center"><span><?php echo $row["title"]; ?></span></h3>&nbsp;&nbsp;
			<img src=<?php echo $row["img"]; ?> alt="" width="280" height="180"/>
			<p><?php echo $row["abstract"]; ?></p>
			<div class="wrapper">
				<a href="index.php?action=Desc&id=<?php echo $row["id"] ?>" class="link2"><span><span>voir plus</span></span></a>
			</div>
		</li>
		
		<?php } if($row = $resultat->fetch()){ ?>
		<li>
			<h3 align="center"><span><?php echo $row["title"]; ?></span></h3>&nbsp;&nbsp;
			<img src=<?php echo $row["img"]; ?> alt="" width="280" height="180"/>
			<p><?php echo $row["abstract"]; ?></p>
			<div class="wrapper">
				<a href="index.php?action=Desc&id=<?php echo $row["id"] ?>" class="link2"><span><span>voir plus</span></span></a>
			</div>
		</li>
		<?php } ?>
		<li class="clear">&nbsp;</li>
	</ul>
	
	<?php }?>

<?php $page=ob_get_clean(); ?>