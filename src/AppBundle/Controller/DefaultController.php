<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PlaceCategory;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $placeCategories = $em->getRepository(PlaceCategory::class)
            ->findAll([], ['sort'=>'ASC']);

        return $this->render('default/index.html.twig', ['categories'=> $placeCategories]);
    }
}
