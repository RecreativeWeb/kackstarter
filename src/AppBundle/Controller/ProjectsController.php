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
		$em = $this->getDoctrine()->getManager();

		$projects = $em->getRepository(Project::class)->findAll();

		return $this->render('projects/index.html.twig',compact('projects'));
	}
}
