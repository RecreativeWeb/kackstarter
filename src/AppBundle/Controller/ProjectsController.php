<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProjectsController extends Controller
{
	/**
	 * @Route("/projects")
	 */
	public function indexAction()
	{
		$projects = ['Cinema ambulant','Theatre de rue','Origami d\'été','Papillote géante','Immeuble floral'];

		return $this->render('projects/index.html.twig',[
			"projets" => $projects
		]);
	}
}
