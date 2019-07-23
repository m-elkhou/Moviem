<?php ob_start(); ?>
<div id="content">
	<div class="line-hor"></div>
		<div class="box">
			<div class="border-right">
				<div class="border-left">
					<div align="center" class="inner">
						<br/><br/><br/><br/><br/><br/><br/><br/><br/>
						<h3 ><font color="white">Connectez vous :</font></h3>
    				    <form  action="index.php?action=login" method="post">
				        	<input type="text" placeholder="username" size="30" name="user"/><br />
       						<input type="password" placeholder="**********" size="30" name="pwd"/><br />
      						<input type="submit" value="Se connecter !" />
<!--             <input type="button" value="inscrivez vous" onClick="location.href='inscrire.php'">-->
						</form>
 						<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
					 </div>
				</div>
			</div>
		</div>
	</div>
</div>
</div></div></div></div>

<?php $page=ob_get_clean(); ?>