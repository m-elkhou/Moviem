<?php

function ouvrirConnexion(){
	$user = 'root';
	$password = '';
	$db = 'mysql:host=localhost;dbname=movie';
	try {
		$cn = new PDO($db, $user, $password);
	}
	catch (PDOException $dbex) {
		die("Erreur de connexion : " . $dbex->getMessage() );
	}
	return $cn;
}

function afficherDate() {
/////La date sur le serveur
$jours = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$d = getdate();

$wj = $d["wday"];
$mj = $d["mday"];
$m = $d["mon"];
$y = $d["year"];

$d= $jours[$wj]. " " . $mj . "/" . $m . "/" . $y;
return $d;
}

function Add($t) {
$cn = ouvrirConnexion();//`movie`(`id`, `title`, `img`, `abstract`, `desc`, `trailer`) 
$Rq = "insert into movie values (" . $t["id"] . ",'" . $t["title"] .  "','" . $t["img"] . "','" . $t["abstract"] . "','" . $t["desc"]  . "','" . $t["trailer"]  . "')";
$resultat = $cn->exec($Rq);
}

function ModifierMovie($t) {
$cn = ouvrirConnexion();
//$Rq = "update movie set id=".$t["id"].",title='".$t["title"]."', img='".$t["img"]."', abstract='".$t["abstract"]."', desc ='".$t["desc"]."', trailer='".$t["trailer"]."' where id=".$t["old"]."";
//$resultat = $cn->exec($Rq);
SupprimerMovie($t["old"]);
Add($t);
}

function SupprimerMovie($c) {

$cn = ouvrirConnexion();
$Rq = "delete from movie where id=".$c." ";
$resultat = $cn->exec($Rq);

}

function AfficherMovie($c) {

$cn = ouvrirConnexion();
$Rq = "select * from movie where id=".$c ." ";
$resultat = $cn->query($Rq);

return $resultat;
//return $cn->query("select * from etudiant where Code='" . $c . "'");

}



function liste() {
	$cn = ouvrirConnexion();
	return $cn->query("select * from movie");
}


function testerCode($E) {
	$cn = ouvrirConnexion();
	$Rq = "select * from movie where id =" . $E ." ";
	$resultat = $cn->query($Rq);
	return $resultat->rowCount();
}
