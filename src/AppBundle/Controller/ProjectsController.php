<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProjectsController extends Controller
{
	/**
	 * @Route("/projects")
	 */
	public function indexAction()
	{
		$project = new Project;
		$project->setName("Immeuble floral");
		$project->setDescription("Quand la ville arbore son manteau automnal");
		$project->setTargetAmount(0);

		$em = $this->getDoctrine()->getManager();

		$em->persist($project);
		$em->flush();

		return new Response('<h1>Project created!</h1>');

		//$projects = ['Cinema ambulant','Theatre de rue','Origami d\'été','Papillote géante','Immeuble floral'];

		//return $this->render('projects/index.html.twig',[
		//	"projets" => $projects
		//]);
	}
}
