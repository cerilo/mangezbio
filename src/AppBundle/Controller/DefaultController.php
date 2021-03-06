<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PlaceCategory;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $placeCategories = $em->getRepository(PlaceCategory::class)
            ->findAll([], ['sort'=>'ASC']);

        return  ['categories'=> $placeCategories];
    }
}
