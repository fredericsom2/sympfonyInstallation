<?php

// definir le chemin de ce fichier,
// oblogatoire, doir representer le chemin du fichier en remplacant le dossier src par APP
namespace App\Controller;


// remplace le require
// on indique ici le namespace de la classe qu'on veut utiliser
// et symfony + composer feront le require automatiquement
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\Routing\Annotation\Route;

// je créé une classe PageController
class PageController extends AbstractController {


	// je créé une fonction (méthode), nomée home, qui affiche un var_dump
	// je créé une annotation R
    //Route, qui définit le chemin (url) à "/"
	// donc, quand un utilisateur demande l'url "/", ma fonction sera appelée
	#[Route('/', name:"home")]
	public function home() {
		// J'utilise extends AbstractController
// pour pouvoir utiliser des fonctionnalités que symfony
// me donnent pour gérer plus facilement les controleurs
// parmi ces fonctionnalités : celle d'utiliser Twig facilement
		
		
		return $this->render('home.html.twig');

	}
}

// récupère l'url demandée
// analayse l'url et récupère la fin ("/", ou "contact" etc)
// il regarde si dans tous les controleurs créés, il y a une fonction qui a une annotation Route
// avec la même url que celle demandée par l'utilisateur
// si oui, il execute la fonction en dessous de l'annotation :
// il va instancier automatiquement la classe : 
// $homeController = new HomeController
// $homeController->home();*