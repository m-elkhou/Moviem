<?php ob_start(); ?>
<div id="content">
	<div class="line-hor"></div>
		<div class="box">
			<div class="border-right">
				<div class="border-left">
					<div align="center" class="inner">
						<br/><br/><br/>
      			 		<h3 ><font color="white">Manger :</font></h3>
    					<form name ="AddMovie" action ="index.php?action=vAdd" method="post">
    						<input type = "submit" value ="Add" />
    					</form>
    					<br/><br/>
    					<form name ="UpdateMovie" action ="index.php?action=vUpdate" method="post">
    						<input type="text" name="id" placeholder="   id" required/><br />
    						<input type = "submit" value ="Update" />
    					</form>
    					<br/><br/>
    					<form name ="RemoveMovie" action ="index.php?action=Remove" method="post">
    						<input type="text" name="id" placeholder="   id" required/><br />
    						<input type = "submit" value ="Remove" />
    					</form>
    					<br/><br/>
    					<form name ="temp" action ="index.php?action=temp" method="post">
    						<input type = "submit" value =" Change Template " />
    					</form>
    					<br/><br/>
    					<form name ="logout" action ="index.php?action=logout" method="post">
    						<input type = "submit" value ="logout" />
    					</form>
    					
						<br/><br/><br/><br/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $page=ob_get_clean(); ?>