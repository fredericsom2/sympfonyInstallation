<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {

	#[Route('/list-articles', name: "list-articles")]
	public function listArticles() {

		$articles = [
			1 => [
				"id" => 1,
				"title" => "Article 1",
				"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
				"created_at" => new \DateTime(),
				"image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
				"is_published" => true
			],
		
			2 => [
				"id" => 2,
				"title" => "Article 2",
				"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
				"created_at" => new \DateTime(),
				"image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
				"is_published" => false
			],
			3 => [
				"id" => 3,
				"title" => "Article 3",
				"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
				"created_at" => new \DateTime(),
				"image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
				"is_published" => true
			]
		];

		return $this->render('list-articles.html.twig', ['articles' => $articles]);
	}

}