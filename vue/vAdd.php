<?php ob_start(); ?>


	<div class="line-hor"></div>
		<div class="box">
			<div class="border-right">
				<div class="border-left">
					<div  class="inner">
						<br/><br/><br/>
						<h3 ><font color="white">Add Movie :</font></h3>
    					<form action ="index.php?action=Add" method="post">
    						<p><span>Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    						</span><input type="text" name="id" value="" /></p>
 							<p><span>Title : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" value=""  size="70" name="title"  /></p>
							<p><span>Image Linke:</span><input type="text" value=""  size="100" name="img"  /></p>
  							<p><span>Abstract : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea rows="2" cols="100" value="" name="abstract"></textarea></p>
  							
  							<p><span>Description : </span><textarea rows="5" cols="100" value="" name="desc"></textarea></p>
<!--  							Description : <input type="text" value=""  size="100" name="desc" /> <br /><br />-->
  							<p><span>Trailer Linke :</span><input type="text" value=""  size="100" name="trailer"  /> <br /></p><br><br>
							
  								<input type = "submit" value =" Add "  class="link2"/>
								<input type = "reset" value =" Anuler " class="link2" />
						</form>
						<br/><br/><br/><br/>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php $page=ob_get_clean(); ?>