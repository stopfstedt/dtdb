<?php

namespace Dtdb\BuilderBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

class ToolsController extends Controller
{
    public function demoAction()
    {
        return $this->render('DtdbBuilderBundle:Tools:demo.html.twig');
    }
}