<?php ob_start(); ?>

<div class="line-hor"></div>
<div class="box">
	<div class="border-right">
		<div class="border-left">
			<div class="inner">
				<h3>(*<?php echo $movie["id"]; ?>*) <span> <?php echo $movie["title"]; ?></span></h3>
				<div class="img-box1 alt">
					<img src=<?php echo $movie["img"]; ?> alt="" />	
							
					<?php echo $movie["desc"]; ?>
					
					</br>
					</br>
						
					<h3><span> Bande Annonce</span></h3> </br>
					<iframe width="560" height="315" src=<?php echo $movie["trailer"]; ?> frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $page=ob_get_clean(); ?>
