<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Service\MarkdownTransformer;

class ProjectsController extends Controller
{
	/**
	 * @Route("/projects")
	 */
	public function indexAction()
	{
		$duMarkdown = 'Je suis du *super* code **markdown**.';
		// $markD = $this->container->get('markdown.parser')->transformMarkdown($duMarkdown);
		
		// on cré une instance de notre classe MarkdownTransformer
		$mkTransformer = new MarkdownTransformer;
		// on utilise l'instance pour appeler la méthode parse()
		$markD = $mkTransformer->parse($duMarkdown);

		$em = $this->getDoctrine()->getManager();

		$projects = $em->getRepository(Project::class)->findAll();

		return $this->render('projects/index.html.twig',compact('projects','markD'));
	}
}
