<?php

namespace Acme\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeBlogBundle:Post:index.html.twig', array(
                // ...
            ));    }

    public function removeAction()
    {
        return $this->render('AcmeBlogBundle:Post:remove.html.twig', array(
                // ...
            ));    }

}
