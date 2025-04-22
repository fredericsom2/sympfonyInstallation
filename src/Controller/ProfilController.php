<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController {

	#[Route('/profil', name: "profil")]
	public function profil() {


$profil = [
    "firstName" => "Mia",
    "lastName" => "Khalifa",
    "job" => "Web dev",
    "languages" => ["JS", "PHP", "TS"],
    "avatar" => "https://f.hellowork.com/obs-static-images/seo/ObsJob/developpeur-web.jpg",
    "looksForJob" => false
];


return $this->render('profil.html.twig', ['profils' => $profil]);
	}

}