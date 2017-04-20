<?php

print"
<!doctype html>
	<html>
		<head>
			<title> Quizz à la Grecque </title>
			<meta charset=\"UTF-8\">
			<link href=\"script/Style.css\" rel=\"stylesheet\" type=\"text/css\">
			<link rel=\"shortcut icon\" href=\"images/symbole.ico\">
		</head>
		
		<body>
			<header>
				<h1> Quizz à la Grecque </h1>
			</header>

		<nav>
			<ul>
				<li> <a href=\"Introduction.html\">Accueil</a> </li>
				<li> <a href=\"Le Commencement.html\">Il était une fois la Grèce</a> </li>
				<li> <a href=\"Chiffres.html\">La Symbolique des Chiffres</a> </li>
				<li> <a href=\"Dieux.html\">Les Dieux de L'Olympe</a> </li>
			</ul>
		</nav>
		<main>
		<div class=\"box\">
		<fieldset> 
";

if ( !isset($_POST["Zeus"]) || !isset($_POST["Regne"]) || !isset($_POST["Frere"]) || !isset($_POST["Eleve"]) ||!isset($_POST["Hades"]) )
{
	print" <p align=\"center\"> Merci de répondre à toutes les questions :) </p>
</body>
</html> ";
	exit(0);
}

/*Etat du monde*/
$Zeus=$_POST["Zeus"];
$Regne=$_POST["Regne"];
$Frere=$_POST["Frere"];
$Eleve=$_POST["Eleve"];
$Hades=$_POST["Hades"];
$soum=$_POST["soum"];
$note=0;


if ($Zeus=="Foudre")
{
print "<p>Vous avez bien répondu à la question 1.</p>"; 
$note=$note+1;}
else 
{print "<p>Vous avez mal répondu à la question 1. La réponse correcte est <b>De la foudre</b>.</p>";
$note=$note;}

if ($Regne=="Les Titans")
{print "<p>Vous avez bien répondu à la question 2.</p>";
$note=$note+1;}
else
{print "<p>Vous avez mal répondu à la question 2. La réponse correcte est <b>Les Titans</b>.</p>";
$note=$note;}

if ($Frere=="Oui")
{print "<p>Vous avez bien répondu à la question 3.</p>";
$note=$note+1;}
else
{print "Vous avez mal répondu à la question 3. La réponse correcte est <b>Oui</b>.</p>";
$note=$note;}

if ($Eleve=="Les Nymphes")
{
print "<p> Vous avez bien répondu à la question 4.</p>"; 
$note=$note+1;}
else 
{print "<p>Vous avez mal répondu à la question 4. La réponse correcte est <b>Les Nymphes</b>.</p>";
$note=$note;}

if ($Hades=="Persephone")
{
print "<p>Vous avez bien répondu à la question 5.</p>"; 
$note=$note+1;}
else 
{print "<p>Vous avez mal répondu à la question 5. La réponse correcte est <b>Perséphone</b>.</p>";
$note=$note;}

print"
		<p align=\"center\"> Vous avez eu la note de <b>$note/5</b>.</p> </br>
		<p align=\"center\"><img src=\"images/Paysage.jpg\" alt=\"Paysage\" width=\"50%\" border=\"1\"> </p> </br> 
		<p align=\"center\" style=\"color:Blue\"> Merci d'avoir participé à notre Quizz </p> 
	</fieldset>
	</div>
	</main>
	<footer>  
				<b>© Koussai HOUSSINE 2017</b>
			</footer>
	</body>
</html>
";
?>