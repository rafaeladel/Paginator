<?php

namespace RAF\PaginatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RAFPaginatorBundle:Default:index.html.twig', array('name' => $name));
    }
}
