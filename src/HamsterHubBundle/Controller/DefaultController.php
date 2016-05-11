<?php

namespace HamsterHubBundle\Controller;

use HamsterHubBundle\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $videos = $this->getDoctrine()->getRepository('HamsterHubBundle:Video')->findAll();


        return $this->render('HamsterHubBundle:my_video:index.html.twig',Array("videos"=>$videos));
    }
}
