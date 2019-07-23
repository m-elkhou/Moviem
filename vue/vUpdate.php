<?php ob_start(); ?>

	<div class="line-hor"></div>
		<div class="box">
			<div class="border-right">
				<div class="border-left">
					<div  class="inner">
						<br/><br/><br/>
    				    <h3 ><font color="white">Modifier Movie : " <?php echo $movie["title"]; ?> " :</font></h3>
    					<form align="center" action ="index.php?action=Update" method="post">
      						<p><span>Old Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</span><input type="text" name="old" value="<?php echo $movie["id"]; ?>" /></p>
       						<p><span>New Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    						</span><input type="text" name="id" value="" /></p>
 							<p><span>Title : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value="<?php echo $movie["title"]; ?>"  size="70" name="title"  /></p>
							<p><span>Image Linke:</span><input type="text" value="<?php echo $movie["img"]; ?>"  size="100" name="img"  /></p>
  							<p><span>Abstract : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea rows="2" cols="100" value="<?php echo $movie["abstarct"]; ?>" name="abstract"></textarea></p>
  							
  							<p><span>Description : </span><textarea rows="5" cols="100" value="" name="desc"></textarea></p>
<!--  							Description : <input type="text" value=""  size="100" name="desc" /> <br /><br />-->
  							<p><span>Trailer Linke :</span><input type="text" value="<?php echo $movie["trailer"]; ?>"  size="100" name="trailer"  /> <br /></p><br><br>
        
       						<tr><td align="center" colspan="2">
								<input type = "submit" value ="Enregistrer" />
								<input type = "reset" value ="Anuler" />
        					</td></tr>
       
   						</form>
 						<br/><br/><br/><br/>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php $page=ob_get_clean(); ?>