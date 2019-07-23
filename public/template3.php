<!DOCTYPE HTML>
<html>

<head>
  <title>PROJET_PHP</title>
<!--  <meta http-equiv="content-type" content="vue/php; charset=UTF-8" />-->
 <style>

  @font-face { 
  font-family: Yanone Kaffeesatz; 
    src: url('public/YanoneKaffeesatz-Regular.eot'); 
    src: local("Yanone Kaffeesatz"), url('public/YanoneKaffeesatz-Regular.ttf'); 
} 

@font-face { 
  font-family: News Cycle; 
    src: url('public/NewsCycle-Regular.eot'); 
    src: local("News Cycle"), url('public/NewsCycle-Regular.ttf'); 
} 

html { 
  height: 100%;
}

* { 
  margin: 0;
  padding: 0;
}

/* tell the browser to render HTML 5 elements as block */
article, aside, figure, footer, header, hgroup, nav, section { 
  display:block;
}

body { 
  font: normal .80em arial, sans-serif;
  background: #000 url(public/free-wallpaper-website-3.jpg);
  color: #DDD;
}

p { 
  padding: 0 0 20px 0;
  line-height: 1.7em;
}

img { 
  border: 0;
}

h1, h2, h3, h4, h5, h6 { 
  color: #362C20;
  letter-spacing: 0em;
  padding: 0 0 5px 0;
}

h1, h2, h3 { 
  font: normal 170% "News Cycle", arial, sans-serif;
  margin: 0 0 15px 0;
  padding: 15px 0 5px 0;
  color: #FFF;
}

h2 { 
  font-size: 160%;
  padding: 9px 0 5px 0;
  color: #F67400;
}

h3 { 
  font-size: 140%;
  padding: 5px 0 0 0;
}

h4, h6 { 
  color: #F67400;
  padding: 0 0 5px 0;
  font: normal 130% arial, sans-serif;
}

h5, h6 { 
  color: #555;
  font: italic 95% arial, sans-serif;
  letter-spacing: normal;
  padding: 0 0 15px 0;
}

a, a:hover { 
  outline: none;
  text-decoration: underline;
  color: #09BCE8;
}

a:hover { 
  text-decoration: none;
}

blockquote { 
  margin: 20px 0; 
  padding: 10px 20px 0 20px;
  border: 1px solid #E5E5DB;
  background: #FFF;
}

ul { 
  margin: 2px 0 22px 17px;
}

ul li { 
  list-style-type: circle;
  margin: 0 0 6px 0; 
  padding: 0 0 4px 5px;
  line-height: 1.5em;
}

ol { 
  margin: 8px 0 22px 20px;
}

ol li { 
  margin: 0 0 11px 0;
}

.left { 
  float: left;
  width: auto;
  margin-right: 10px;
}

.right { 
  float: right; 
  width: auto;
  margin-left: 10px;
}

.center { 
  display: block;
  text-align: center;
  margin: 20px auto;
}

#main, nav, #container, #logo, #site_content, footer { 
  margin-left: auto; 
  margin-right: auto;
}

#main {
  margin: 5px auto;
  width: 930px;
  background: transparent;
  padding-bottom: 30px;
}

header { 
  background: transparent;
  height: 150px;
}

#logo { 
  width: 300px;
  height: 150px;
  background: transparent;
  color: #FFF;
  padding: 0 0 0 25px;
  float: left;
}

#logo h1, #logo h2 { 
  font: normal 320% 'News Cycle', arial, sans-serif;
  border-bottom: 0;
  text-transform: none;
  margin: 0;
  padding: 0;
}

#logo_text h1, #logo_text h1 a, #logo_text h1 a:hover { 
  padding: 0;
  color: #FFF;
  text-decoration: none;
}

#logo_text h1 a .logo_colour { 
  color: #09BCE8;
}

#logo_text a:hover .logo_colour { 
  color: #FFF;
}

#logo_text h2 { 
  font-size: 140%;
  padding: 0;
  color: #FFF;
}

nav { 
  height: 44px;
  width: 928px;
  float: right;
  margin: -20px auto 20px auto;
  color: #222;
  background: #ddd; /* Show a solid color for older browsers */
  background: -moz-linear-gradient(#fff, #ddd);
  background: -o-linear-gradient(#fff, #ddd);
  background: -webkit-linear-gradient(#fff, #ddd);
  -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  -moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  border: 1px solid #eee;
} 

#site_content { 
  width: 930px;
  overflow: hidden;
  margin: 20px auto;
  background:#999;
} 

#sidebar_container { 
  float: right;
  width: 450px;
  padding: 0;
  height: 450px;
}

#content { 
  text-align: left;
  width: 440px;
  margin: 0 0 0 0;
  float: left;
  padding: 0 20px 20px 20px;
}

#sidebar_container1234 { 
  float: right;
  width: 530px;
  padding: 0;
  height: 450px;
}

#content1234 { 
  text-align: left;
  width: 360px;
  margin: 0 0 0 0;
  float: left;
  padding: 0 20px 20px 20px;
}

#content1 { 
  text-align: left;
  width: 880px;
  margin: 0 0 0 0;
  float: left;
  padding: 0 20px 20px 20px;
	color :black;
}
  
#content ul { 
  margin: 2px 0 22px 0px;
}

#content ul li, .sidebar ul li { 
  list-style-type: none;
  background: url(public/bullet.png) no-repeat;
  margin: 0 0 0 0; 
  padding: 0 0 4px 28px;
  line-height: 1.5em;
}

#blog_container h4 {
  font: normal 170% 'News Cycle', arial, sans-serif;
  margin: 0 0 15px 0;
  padding: 5px 0;}

#blog_container h4.select {
  width: 475px;}

.blog {
  background: url(public/calendar.png) no-repeat;
  width: 54px;
  height: 46px;
  float: left;
  margin: 0 15px 0 0;
}

.blog h2 {
  font: normal 90% arial, sans-serif;
  text-shadow: none;
  text-align: center;
  margin: 0;
  padding: 4px 0 0 0;
  color: #FFF;
}
  
.blog h3 {
  font: 140% arial, sans-serif;
  text-shadow: none;
  margin: -5px 0 0 0;
  text-align: center;
  color: #222;
}

footer { 
  width: 928px;
  font: 140% 'News Cycle', arial, sans-serif;
  height: 30px;
  padding: 9px 0 15px 0;
  color: #222;
  text-align: center;
  background: #ddd; /* Show a solid color for older browsers */
  background: -moz-linear-gradient(#fff, #ddd);
  background: -o-linear-gradient(#fff, #ddd);
  background: -webkit-linear-gradient(#fff, #ddd);
  -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  -moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  border: 1px solid #eee;
}

footer p { 
  line-height: 1.7em;
  padding: 0 0 10px 0;
}

footer a { 
  color: #222;
  text-decoration: none;
}


footer a:hover { 
  color: #222;
  text-shadow: none;
  text-decoration: underline;
}

.form_settings { 
  margin: 15px 0 0 0;
}

.form_settings p { 
  padding: 0 0 4px 0;
}

.form_settings span { 
  float: left; 
  width: 100px; 
  text-align: left;
}
  
.form_settings input, .form_settings textarea { 
  padding: 5px; 
  width: 299px; 
  font: 100% arial; 
  border: 1px solid #D5D5D5; 
  background: #FFF; 
  color: #47433F;
  border-radius: 7px 7px 7px 7px;
  -moz-border-radius: 7px 7px 7px 7px;
  -webkit-border: 7px 7px 7px 7px;  
}
  
.form_settings .submit { 
  font: 150% 'Yanone Kaffeesatz', arial, sans-serif; 
  border: 0; 
  width: 99px; 
  margin: 0 0 0 212px; 
  height: 33px;
  padding: 2px 0 3px 0;
  cursor: pointer; 
  background: #1EC9F4; 
  color: #222;
  background: #ddd; /* Show a solid color for older browsers */
  background: -moz-linear-gradient(#fff, #ddd);
  background: -o-linear-gradient(#fff, #ddd);
  background: -webkit-linear-gradient(#fff, #ddd);
  -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  -moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px;
  border: 1px solid #eee;
  text-shadow: 1px 1px #FFF;
}

.form_settings textarea, .form_settings select { 
  font: 100% arial; 
  width: 299px;
}

.form_settings select { 
  width: 310px;
}

.form_settings .checkbox { 
  margin: 4px 0; 
  padding: 0; 
  width: 14px;
  border: 0;
  background: none;
}

.separator { 
  width: 100%;
  height: 0;
  border-top: 1px solid #D9D5CF;
  border-bottom: 1px solid #FFF;
  margin: 0 0 20px 0;
}
 
table { 
  margin: 10px 0 30px 0;
}

table tr th, table tr td { 
  background:#999;
  color: #FFF;
  padding: 7px 4px;
  text-align: left;
}
  
table tr td { 
  background:#999;
  color:black;
  border-top: 1px ;
}

ul.images {
  width:450px;
  height:450px;
  overflow:hidden;
  position:relative;
  margin:0;
  padding:0;
} 

ul.images li {
  position:absolute;
  margin:0;
  padding:0;
  left:0;
  right:0;
  list-style:none;
}
 
ul.images li.show {
    
}
 
ul img {
  border:none;  
}




/**
Stylesheet for SooperFish by www.SooperThemes.com
Author: Jurriaan Roelofs
**/

/* Configuration of menu width */
html body ul.sf-menu ul,html body ul.sf-menu ul li { 
  width: 220px;
}

html body ul.sf-menu ul ul { 
  margin: 0 0 0 220px;
}

/* Framework for proper showing/hiding/positioning */
ul.sf-menu,ul.sf-menu * { 
  margin: 0;
  padding: 0;
}

ul.sf-menu { 
  display: block;
  position: relative;
}
  
ul.sf-menu li { 
  display: block;
  list-style: none;
  float: left;
  position: relative;
}
  
ul.sf-menu li:hover { 
  visibility: inherit; /* fixes IE7 'sticky bug' */ 
}

ul.sf-menu a { 
  display: block;
  position: relative;
}
  
ul.sf-menu ul { 
  position: absolute;
  left: 0;
  width: 150px; 
  top: auto;
  left: -999999px;
}
  
ul.sf-menu ul a { 
  zoom: 1; /* IE6/7 fix */ 
}

ul.sf-menu ul li { 
  float: left; /* Must always be floated otherwise there will be a rogue 1px margin-bottom in IE6/7 */
  width: 150px;
}
  
ul.sf-menu ul ul { 
  top: 0;
  margin: 0 0 0 150px;
}

ul.sf-menu li:hover ul,ul.sf-menu li:focus ul,ul.sf-menu li.sf-hover ul, 
ul.sf-menu ul li:hover ul,ul.sf-menu ul li:focus ul,ul.sf-menu ul li.sf-hover ul,
ul.sf-menu ul ul li:hover ul,ul.sf-menu ul ul li:focus ul,ul.sf-menu ul ul li.sf-hover ul,
ul.sf-menu ul ul ul li:hover ul,ul.sf-menu ul ul ul li:focus ul,ul.sf-menu ul ul ul li.sf-hover ul { 
  left: auto;
}
  
ul.sf-menu li:hover ul ul,ul.sf-menu li:focus ul ul,ul.sf-menu li.sf-hover ul ul,
ul.sf-menu ul li:hover ul ul,ul.sf-menu ul li:focus ul ul,ul.sf-menu ul li.sf-hover ul ul,
ul.sf-menu ul ul li:hover ul ul,ul.sf-menu ul ul li:focus ul ul,ul.sf-menu ul ul li.sf-hover ul ul,
ul.sf-menu ul ul ul li:hover ul ul,ul.sf-menu ul ul ul li:focus ul ul,ul.sf-menu ul ul ul li.sf-hover ul ul { 
  left: -999999px;
}

/* autoArrows CSS */
span.sf-arrow { 
  width: 7px;
  height: 7px;
  position: absolute;
  top: 20px;
  right: 5px;
  display: block;
  background: url(public/arrows-black.png) no-repeat 0 0;
  overflow: hidden; /* making sure IE6 doesn't overflow and expand the box */
  font-size: 1px;
}

ul ul span.sf-arrow { 
  right: 5px;
  top: 20px;
  background-position: 0 100%;
}

/* Theming the menu */
ul#nav { 
  float: left;
}

ul#nav ul { 
  background: #EEE;
  margin-top: 4px;
  padding-bottom: 15px;
}

ul#nav li a { 
  padding: 7px 25px 6px 25px;
  font: 140% 'News Cycle', arial, sans-serif;
  text-decoration: none;
  color: #222;
  margin-right: 2px;
}

ul#nav li a:hover, ul#nav li a:focus, ul#nav li.selected a, ul#nav li.selected a:hover, ul#nav li.selected a:focus { 
  color: #068BD8;
  text-shadow: none;
}

ul#nav ul li a { 
  color: #222;
}

ul#nav ul li a:hover { 
  color: #068BD8;
  margin-right: 2px;
}



/* Image Transitions */
ul#images {
  margin: 0 15px 10px 0;
  padding: 0;
  list-style: none;
  position: relative;
}

ul#images li {
  display: block;
  overflow: hidden;
  padding: 0;
  float: left;
  width: 155px;
  height: 300px;
}#main #site_content #content p {
	color: #000;
}
#main #site_content #content p {
	color: #272727;
}
#main #site_content #content h1 strong {
	color: #EFEFEF;
}
#main #site_content #content p {
	color: #000;
}
#main #site_content #content p {
	color: #000;
}
	</style>
  <script type="public/javascript" src="public/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a>PROJET_PHP</a></h1>
          <h2>Gestion des Etudiant</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php?action=aceuil">Home</a></li>
          <li><a href="index.php?action=about">About Us</a></li>
          <li><a href="index.php?action=liste">Liste des etudiant</a></li>
          <li><a href="#">Gestion</a>
            <ul>
              <li><a href="index.php?action=formAjout">Ajouter Un etudiant</a></li>
              <li><a href="index.php?action=ModifierEtudiant">Modifier un etudiant</a></li>  
              <li><a href="index.php?action=suprim">Suprimie un etudiant</a></li>  
                       
            </ul> 
          </li>          
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="gallery">
          <ul class="images">
            <li class="show"><img width="450" height="450" src="public/21.png" alt="photo_one" /></li>
            <li><img width="450" height="450" src="public/23.png" alt="photo_two" /></li>
            <li><img width="450" height="450" src="public/22.png" alt="photo_three" /></li>
          </ul>
        </div>
      </div>
      <div id="content">
<!--        <?php echo $page; ?> ----------------------------------------------------------------------->
      <?= $page; ?>
    </div>
    </div>
    <footer>
    <h5>Mohammed EL-KHOU</h5>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="public/javascript" src="public/jquery.js"></script>
  <script type="public/javascript" src="public/jquery.easing-sooper.js"></script>
  <script type="public/javascript" src="public/jquery.sooperfish.js"></script>
  <script type="public/javascript" src="public/image_fade.js"></script>
  <script type="public/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
  
</body>
</html>
