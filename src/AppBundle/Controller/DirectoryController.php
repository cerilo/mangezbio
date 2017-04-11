<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Department;
use AppBundle\Entity\PlaceCategory;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DirectoryController extends Controller
{

    /**
     * @param PlaceCategory $placeCategory
     *
     * @Route("/annuaire-{slug}/", name="directory-index")
     * @Template()
     *
     * @return array
     */
    public function indexAction(PlaceCategory $placeCategory): array
    {

        $em = $this->getDoctrine()->getManager();
        $departments = $em->getRepository(Department::class)
            ->findAll();

        return ['category'=> $placeCategory, 'departments'=> $departments];
    }
}
