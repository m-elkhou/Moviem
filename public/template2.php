<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pharmacie</title>
	<style>
	
body {
	background: #272733;
	color: #878785;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	margin: 0;
	min-width: 960px;
	padding: 0;
}

a {
	outline: none;
}

img  {
	border: 0;
}

p a {
	color: #A8279D;
}

p a:hover {
	text-decoration: none;
}

#header {
	background: #ededed;
	padding-bottom: 23px;
	width: 100%;
}

#header div {
	margin: 0 auto;
	width: 960px;
}

#header div div#logo {
	padding: 30px 0 25px;
	width: auto;
}

#header div div#logo a {
	display: block;
}

#header div div#navigation {
	background: url(images/bg-nav-left-curve.gif) no-repeat left top;
	padding-left: 6px;
	width: auto;
}

#header div div#navigation div {
	background: url(images/bg-nav-right-curve.gif) no-repeat right top;
	padding-left: 0;
	padding-right: 6px;
	width: auto;
}

#header div div#navigation div ul {
	background: url(images/bg-navigation.gif) repeat-x;
	height: 40px;
	line-height: 40px;
	list-style: none;
	margin: 0;
	padding: 0 0 0 20px;
}

#header div div#navigation div ul li {
	float: left;
	padding: 0 20px;
}

#header div div#navigation div ul li a {
	color: #78707d;
	display: block;
	line-height: 40px;
	text-align: center;
	text-decoration: none;
	text-shadow: 0 1px #f8f8fa;
	width: 140px;
}

#header div div#navigation div ul li.current a,
#header div div#navigation div ul li a:hover {
	background: url(images/bg-text.gif) no-repeat 0 -91px;
	color: #a62599;
	text-shadow: 0 1px #fefffa;
}

#body {
	background: #d1d0d5 url(images/bg-body.gif) repeat-x;
	padding-bottom: 40px;
	width: 100%;
}

div.body {
	background: url(images/bg-footer.gif) repeat;
	height: 100%;
	padding-bottom: 40px;
	width: 100%;
}

#body div#home {
	background: url(images/bg-homepage.jpg) no-repeat center top;
	margin: 0 auto;
	overflow: hidden;
	padding: 515px 0 0;
	width: 960px;
}

#body div#home div.sidebar {
	float: left;
    margin: 100px 0 0 30px;
	width: 420px;
}

#body div#home div.sidebar ul,
#body div div.sidebar ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

#body div#home div.sidebar ul li {
	margin: 5px 0 0;
	overflow: hidden;
}

#body div#home div.sidebar ul li.first,
#body div div.sidebar ul li.first {
	margin: 0
}

#body div#home div.sidebar ul li h3,
#body div div.sidebar ul li h3,
#footer div.section ul li h3 {
	color: #626075;
	font-size: 20px;
	font-weight: normal;
	margin: 0 0 10px;
}

#body div#home div.sidebar ul li img,
#body div div.sidebar ul li img {
	float: left;
}

#body div#home div.sidebar ul li p,
#body div div.sidebar ul li p,
#footer div.section ul li p {
	float: left;
	line-height: 24px;
	margin: 0;
	text-align: justify;
}

#body div#home div.sidebar ul li p {
	width: 300px;
}

#body div div.sidebar ul li p {
	float: none;
}

#body div#home div.content {
	background: none;
	float: right;
	padding: 0;
	width: 470px;
}

#body div#home div.content h1 {
	color: #fff;
	font-size: 20px;
	font-weight: normal;
	line-height: 40px;
	margin: 0;
}

#body div#home div.content p,
#body div div.content p {
	color: #79677f;
	line-height: 24px;
	margin: 0 0 12px;
	text-align: justify;
}

#body div,
div.body div {
	background: none;
	margin: 0 auto;
	overflow: hidden;
	padding: 0 10px 0;
	width: 940px;
}

div.body div {
	position: relative;
	top: -3px;
}

div.body div div.sidebar {
	background: #ededed;
	float: left;
	margin: 0;
	padding: 0;
	width: 220px;
}

div.body div div.sidebar div {
	background: url(images/bg-sidebar-bottom.gif) no-repeat center bottom;
	padding: 0 0 12px;
	position: static;
    top: 0;
	width: auto;
}

div.body div div.sidebar div h3 {
	background: url(images/separator.gif) no-repeat center top;
	font-size: 16px;
	font-weight: normal;
	margin: 0;
	padding: 10px 0 10px 10px;
}

div.body div div.sidebar div h3 a {
	background: url(images/arrow.gif) no-repeat 170px 4px;
	color: #272731;
	display: block;
	text-decoration: none;

	text-indent: 20px;
}

div.body div div.sidebar div h3.first a {
	background: url(images/arrow.gif) no-repeat 170px -23px;
}

div.body div div.sidebar div h3 a span,
div.body div div.sidebar div h3 a:hover {
	color: #09b4d2;
}

div.body div div.sidebar div div {
	background: url(images/separator.gif) no-repeat center top;
	padding: 10px 0 10px 40px;
}

div.body div div.sidebar div div p {
	line-height: 24px;
	margin: 0;
}

div.body div div.sidebar div div p a {
	color: #776a7e;
	text-decoration: none;
}

div.body div div.sidebar div div p a span,
div.body div div.sidebar div div p a:hover {
	color: #aa259a;
}

div.body div div.sidebar div h2 {
	background: url(images/bg-text.gif) no-repeat 0 -39px;
	display: block;
	font-size: 16px;
	font-weight: normal;
	height: 43px;
    line-height: 45px;
	margin: 0 0 10px;
	position: relative;
	text-indent: 10px;
    text-shadow: 0 1px #E8F09B;
	top: -4px;
	width: 220px;
}

div.body div div.content {
	float: left;
    margin-left: 30px;
    padding: 0;
    width: auto;
}

div.body div div.content ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

div.body div div.content ul li {
	display: block;
	overflow: hidden;
	margin: 40px 0;
}

div.body div div.content ul li.first div {
	border: 0;
}

div.body div div.content ul li.first div h1 {
	margin: 10px 0 0;
}

div.body div div.content ul li.first span {
	margin-top: 0;
}

div.body div div.content ul li span {
	background: url(images/bg-date.jpg) no-repeat;
	color: #5d6a00;
	display: block;
	font-size: 16px;
	float: left;
	height: 75px;
	line-height: 24px;
	margin-top: 30px;
	padding-top: 25px;
	text-align: center;
	text-shadow: 0 1px #dce98d;
	width: 100px;
}

div.body div div.content ul li div {
	border-top: 1px solid #353541;
	float: left;
	margin: 0 0 0 30px;
	padding: 0;
	position: static;
	top: 0;
	width: 550px;
}

div.body div div.content ul li div h1 {
	font-size: 20px;
	font-weight: normal;
	margin: 40px 0 0;
}

div.body div div.content ul li div p {
	line-height: 24px;
	margin: 0;
	text-align: justify;
}

#body div div.sidebar, #body div div#connect {
	float: left;
	margin: 0;
	padding: 0;
	width: 300px;
}

#body div div.sidebar ul {
	padding-top: 15px;
}

#body div div.sidebar ul li img {
	margin: 5px 15px 50px 0;
}

#body div div.sidebar ul li {
	margin: 90px 0 0;
	overflow: hidden;
}

#body div div.content,
#body div div#contact {
	background: url(images/bg-content.png) repeat;
	border-radius: 10px;
	float: right;
	padding: 15px 20px;
	width: 580px;
}

#body div div.content h3,
#body div div#contact h3 {
	color: #09b3d4;
	font-size: 20px;
	font-weight: normal;
	margin: 50px 0 0;
}

#body div div.content h3.first,
#body div div#contact h3.first {
	margin: 0;
}

#body div div.content p {
	margin: 0;
}

#body div div#contact p {
	color: #79677F;
	text-indent: 50px;
}

#body div div#contact b {
	color: #79677F;
	display: block;
	font-weight: normal;
	line-height: 24px;
	padding: 20px 0 0 80px;
}

#body div div#connect h3 {
	font-size: 20px;
	font-weight: normal;
	margin-bottom: 15px;
	text-indent: 50px;
}

#body div div#connect a {
	color: #878785;
	display: block;
	font-size: 16px;
	height: 72px;
	line-height: 67px;
	margin: 0 0 0 23px;
	text-decoration: none;
	text-indent: 100px;
	width: 232px;
}

#body div div#connect a#facebook {
	background: url(images/icons.jpg) no-repeat -243px 0;
}

#body div div#connect a#facebook:hover {
	background: url(images/icons.jpg) no-repeat 0 0;
}

#body div div#connect a#subscribe {
	background: url(images/icons.jpg) no-repeat -243px -70px;
}

#body div div#connect a#subscribe:hover {
	background: url(images/icons.jpg) no-repeat 0 -70px;
}

#body div div#connect a#twitter {
	background: url(images/icons.jpg) no-repeat -243px -145px;
	line-height: 75px;
}

#body div div#connect a#twitter:hover {
	background: url(images/icons.jpg) no-repeat 0 -145px;
}

#body div div#connect a#flicker {
	background: url(images/icons.jpg) no-repeat -243px -225px;
}

#body div div#connect a#flicker:hover {
	background: url(images/icons.jpg) no-repeat 0 -225px;
}

#body div#gallery {
	background: url(images/bg-content.png) repeat;
	border-radius: 10px;
	height: auto;
	margin: 0 auto;
	padding: 20px;
	width: 920px;
}

#body div#gallery ul {
	display: block;
	list-style: none;
	margin: 0;
	overflow: hidden;
	padding: 0;
}

#body div#gallery ul li {
	float: left;
	height: 315px;
	margin: 10px;
	width: 210px;
}

#body div#gallery ul li a {
	display: block;
	width: 210px;
}

#body div#gallery ul li div {
	left: -99999px;
	position: relative;
	width: auto;
	overflow:visible;
}

#body div#gallery ul li div ul {
	background: url(images/bg-options.png) repeat;
	height: 40px;
	list-style: none;
	left: 1px;
	margin: 0;
	padding: 0 0 0 15px;
	position: absolute;
	top: 0;
	top: -55px;
	width: 193px;
}

#body div#gallery ul li div ul li {
	float: left;
	height: auto;
	margin: 5px 15px;
	width: auto;
}

#body div#gallery ul li:hover div {
	left: 0;
}

#body div#gallery ul li div ul li a {
	display: block;
	height: 27px;
	text-indent: -99999px;
	width: 27px;
}

#body div#gallery ul li div ul li a.view {
	background: url(images/options.gif) no-repeat 0 -73px;
}

#body div#gallery ul li div ul li a.info {
	background: url(images/options.gif) no-repeat 0 -36px;
}

#body div#gallery ul li div ul li a.download {
	background: url(images/options.gif) no-repeat 0 0;
}

#body div#paging, div.body div div.content div#paging {
	height: 40px;
	margin: 20px auto 0;
	padding: 0;
	text-align: center;
	width: 960px;
}

div.body div div.content div#paging {
	margin-left: 130px;
    width: 530px;
}

#body div#paging span,
div.body div div.content div#paging  span {
	display: inline;
}

#body div#paging span a,
div.body div div.content div#paging span a {
	background: url(images/bg-text.gif) no-repeat 0 -291px;
	color: #fff;
	display: inline-block;
	font-size: 16px;
	height: 40px;
	line-height: 40px;
	letter-spacing: 5px;
	text-decoration: none;
	width: 100px;
}

div.body div div.content div#paging span a {
	background: url(images/bg-text.gif) no-repeat 0 -241px;
}

div.body div div.content div#paging span a:hover {
	background: url(images/bg-text.gif) no-repeat 0 -141px;
}

#body div#paging span a:hover {
	background: url(images/bg-text.gif) no-repeat 0 -191px;
}

#body div#paging span.first,
div.body div div.content div#paging span.first {
	margin-right: 5px;
}

#body div#paging span.last,
div.body div div.content div#paging span.last {
	margin-left: 5px;
}

#body div#paging ul,
div.body div div.content div#paging ul {
	display: inline;
	list-style: none;
	margin: 0;
	padding: 0;
}

#body div#paging ul li,
div.body div div.content div#paging ul li {
	display: inline;
	margin: 0 3px;
}

#body div#paging ul li a,
div.body div div.content div#paging ul li a {
	background: url(images/bg-text.gif) no-repeat 0 -487px;
	color: #fff;
	display: inline;
	font-size: 16px;
	height: 40px;
	padding: 15px;
	text-align: center;
	text-decoration: none;
}

div.body div div.content div#paging ul li a {
	background: url(images/bg-text.gif) no-repeat 0 -437px;
}

#body div#paging ul li.current a,
#body div#paging ul li a:hover{
	background: url(images/bg-text.gif) no-repeat 0 -387px;
}

div.body div div.content div#paging ul li.current a,
div.body div div.content div#paging ul li a:hover {
	background: url(images/bg-text.gif) no-repeat 0 -337px;
}

#footer {
	height: auto;
	width: 100%;
}

#footer div {
	background: url(images/bg-footer.gif) repeat;
	height: 250px;
	width: 100%;
}

#footer div div {
	background: none;
	height: auto;
	margin: 0 auto;
	width: 960px;
}

#footer div div span {
	background: url(public/images/bg-text.gif) no-repeat 0 0;
	color: #6a7112;
	display: block;
	font-size: 16px;
	height: 35px;
	left: 0;
	line-height: 35px;
	margin-bottom: 10px;
	position: relative;
	text-align: center;
	text-shadow: 0 1px #e8f09b;
	top: -4px;
	width: 120px;
}

#footer div div ul {
	list-style: none;
	margin: 0;
	overflow: hidden;
	padding: 0;
}

#footer div div ul li {
	float: left;
	margin-left: 30px;
	position: relative;
	width: 300px;
}

#footer div div ul li.first {
	margin-left: 0;
}

#footer div div ul li h2 {
	font-size: 16px;
	font-weight: normal;
	margin: 0;
}

#footer div div ul li h2 a,
div.body div div.content ul li div h1 a {
	color: #08b5d7;
	text-decoration: none;
}

#footer div div ul li h2 a:hover,
div.body div div.content ul li div h1 a:hover {
	color: #83e0f1;
}

#footer div div ul li span.date {
	background: none;
	color: #CADF18;
    font-size: 9px;
    height: auto;
    line-height: 11px;
	position: absolute;
    left: 200px;
	text-align: right;
	text-shadow: none;
    top: 4px;
    width: 100px;
}

#footer div div ul li p {
	color: #fff;
	line-height: 24px;
	margin: 5px 0 0;
	text-align: justify;
}

#footer div div ul li a.readmore {
	color: #cadf18;
	display: block;
	text-align: right;
	text-decoration: none;
}

#footer div div ul li a.readmore:hover {
	color: #edfb7b;
}

#footer div.section {
	background: #d1d0d5;
	height: 220px;
	padding: 30px 0 0;
	width: 100%;
}

#footer div.section ul {
	list-style: none;
	margin: 0 auto;
	padding: 0;
	width: 960px;
}

#footer div.section ul li {
	float: left;
	width: 320px;
}

#footer div.section ul li.first {
	margin-left: 0;
}

#footer div.section ul li img {
	float: left;
	margin-right: 5px;
}

#footer div.section ul li p a.readmore {
	text-decoration: none;
}

#footer div.section ul li p a.readmore:hover {
	color: #770c6e;
}

#footer div.section ul li p {
	float: left;
	width: 210px;
}

#footer p.footnote {
	color: #08090e;
	height: 40px;
	line-height: 40px;
	margin: 0;
	text-align: center;
	text-shadow: 0 1px #353446;
}
	</style>
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
			<a href="index.html"><H1>Movie m</H1></a>
			</div>
			<div id="navigation">
				<div>
					<ul class="sf-menu" id="nav">
						<li <?php echo $H; ?>><a href="index.php?action=vHome" >Home</a></li>
						<li <?php echo $L; ?>><a href="index.php?action=vList" >List</a></li>
       				    <li <?php echo $M; ?>><a href="index.php?action=vConection" >Manager</a></li>
        			    <li <?php echo $I; ?>><a href="index.php?action=vInscrription" >Inscrire</a></li>
        			    <li <?php echo $A; ?>><a href="index.php?action=vAbout"  >About Us</a></li>  
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="body">
		<div>
			<div class="sidebar"> </div>
			<div class="content">
				 <?php echo $page; ?> 
			</div>	
		</div>
	</div>
	<div id="footer">
		<div class="section">
			<ul>
				<li class="first">
					<h3>The Guide book</h3>
					<a href="index.php"><img src="images/guide-book3.jpg" alt="Image"></a>
				
				</li>
				<li>
					<h3>E-mail us</h3>
					<a href="index.php"><img src="images/email3.jpg" alt="Image"></a>
					
				</li>
				<li>
					<h3>Best place for Photoshoots</h3>
					<a href="index.php"><img src="images/home3.jpg" alt="Image"></a>
				</li>
			</ul>
		</div>
		<p class="footnote">&copy; 2010 Motion. All Rights Reserved.</p>
	</div>
	
	<script type="public/js/javascript" src="public/js/jquery.js"></script>
  <script type="public/js/javascript" src="public/js/jquery.easing-sooper.js"></script>
  <script type="public/js/javascript" src="public/js/jquery.sooperfish.js"></script>
  <script type="public/js/javascript" src="public/js/image_fade.js"></script>
  <script type="public/js/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>