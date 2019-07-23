<?php
session_start();
$temp = 0;

$H="class=\"active\"";
$M=$L=$I=$A="";

$login_valide = "mohammed";
$pwd_valide = "mohammed";

function login(){
	global $login_valide;
	global $pwd_valide ;
//	$login_valide = "mohammed";
//	$pwd_valide = "mohammed";
	
	if (isset($_POST['user']) && isset($_POST['pwd'])) {
		if($login_valide == $_POST['user']){
			if ($login_valide == $_POST['user'] && $pwd_valide == $_POST['pwd']) {
    		
				$_SESSION['user'] = $_POST['user'];
				$_SESSION['pwd'] = $_POST['pwd'];
//				header ("location: 'index.php?action=vManager'");
				return(true);
	 		}
  		}
	}
	return(false);
}

function stay_login(){
	global $login_valide;
	global $pwd_valide ;
//	$login_valide = "mohammed";
//	$pwd_valide = "mohammed";
	if ($login_valide == $_SESSION['user'] && $pwd_valide == $_SESSION['pwd']) return(true);
	else return(false);
	return(false);
}

function logout(){
	$_SESSION['user'] = "notConected";
	$_SESSION['pwd'] = "notConected";
//	session_destroy();
//	session_reset();
}

function aclle(){
	
	global $temp ;
	$resultat = liste();
	
	if (empty($_GET["action"])) $action = "vHome";
		else $action = $_GET["action"];

	if ($action=='vList') {
		$resultat = liste();
		
		$L="class=\"active\"";
		$M=$H=$I=$A="";
		$vue = "vList.php";
	}
	
	else if ($action=='Desc'){
		$resultat = AfficherMovie($_GET["id"]);
		$movie = $resultat->fetch();
		
		$L="class=\"active\"";
		$M=$H=$I=$A="";
		$vue = "vDesc.php";
	}
	
	else if ($action=='vDesc'){
		$L="class=\"active\"";
		$M=$H=$I=$A="";
		$vue = "vDesc.php";
	}
	
	else if ($action=='vAbout'){
		
		$A="class=\"active\"";
		$M=$L=$I=$H="";
		$vue = "vAbout.php";
	}

	
	else if ($action=='vInscription'){
		$I="class=\"active\"";
		$M=$L=$H=$A="";
		$vue = "vInscription.php";
	}
	
	else if ($action=='vConection'){
		$M="class=\"active\"";
		$H=$L=$I=$A="";
		if(stay_login()) $vue = "vManager.php";
		else $vue = "vConection.php";
	}
	
	else if ($action=='login'){
		$M="class=\"active\"";
		$H=$L=$I=$A="";
		if(login($_POST)){
		$vue = "vManager.php";
		}
		else $vue = "vConection.php";
	}
	
	else {
		$H="class=\"active\"";
		$M=$L=$I=$A="";
		$vue="vHome.php";
	}

	if(stay_login()){
		if ($action=='vAdd') {
		$resultat = liste();
		
		$M="class=\"active\"";
		$H=$L=$I=$A="";
		$vue = "vAdd.php";
		}
	
		else if ($action=='Add') {
		Add($_POST);
		$resultat = AfficherMovie($_POST["id"]);
		$movie = $resultat->fetch();
		
		$L="class=\"active\"";
		$M=$H=$I=$A="";
		$vue = "vDesc.php";
		}
	
		else if ($action=='Remove'){
		SupprimerMovie($_POST["id"]);
		$resultat = liste();
		
		$L="class=\"active\"";
		$M=$H=$I=$A="";
		$vue = "vList.php";
		}
	
		else if ($action=='vUpdate'){
		
		$resultat = AfficherMovie($_POST["id"]);
		$movie = $resultat->fetch();
		
		$M="class=\"active\"";
		$H=$L=$I=$A="";
		$vue = "vUpdate.php";
		}
	
		else if ($action=='Update'){
		ModifierMovie($_POST);
		$resultat = AfficherMovie($_POST["id"]);
		$movie = $resultat->fetch();
		
		$L="class=\"active\"";
		$M=$H=$I=$A="";
		$vue = "vDesc.php";
		}
	
		else if ($action=='temp'){
		if($temp >= 2) $temp =0;
		else $temp ++;
				
		$M="class=\"active\"";
		$H=$L=$I=$A="";
		$vue = "vManager.php";
		}
		
		else if ($action=='logout'){
		logout();		
		$M="class=\"active\"";
		$H=$L=$I=$A="";
		$vue = "vConection.php";
		}
		
	}
	

	$vue="vue/" . $vue;
	
	require($vue);
	
	if( $temp ==0 )	require("public/template.php");
	else if($temp ==1)	require("public/template2.php");
	else if($temp ==2)	require("public/template3.php");
	else require("public/template.php");
}