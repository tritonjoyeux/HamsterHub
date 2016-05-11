<?php

namespace HamsterHubBundle\Controller;

use HamsterHubBundle\Entity\User;
use HamsterHubBundle\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewsController extends Controller
{
    public function indexAction()
    {
        $videos = $this->getDoctrine()->getRepository('HamsterHubBundle:Video')->findAll();

        for ($i = 0; $i < count($videos); $i++) {
            $tab_video = explode("/", $videos[$i]->geturl());
            $videos[$i]->seturl('http://img.youtube.com/vi/' . $tab_video[4] . '/mqdefault.jpg');
        }

        return $this->render('HamsterHubBundle:Default:index.html.twig', Array("videos" => $videos));
    }

    public function myvideoAction()
    {
        $videos = $this->getDoctrine()->getRepository('HamsterHubBundle:Video')->findBy(array('idUser' => $this->container->get('security.context')->getToken()->getUser()->getId()));
        for ($i = 0; $i < count($videos); $i++) {
            $tab_video = explode("/", $videos[$i]->geturl());
            $videos[$i]->seturl('http://img.youtube.com/vi/' . $tab_video[4] . '/mqdefault.jpg');
        }

        return $this->render('HamsterHubBundle:my_video:index.html.twig', Array("videos" => $videos, "user" => $this->getUser()));
    }

    public function videoAction($id_video)
    {
        $video = $this->getDoctrine()->getRepository('HamsterHubBundle:Video')->findBy(array('id' => $id_video));
        $comments = $this->getDoctrine()->getRepository('HamsterHubBundle:Comments')->findBy(array('idVideo' => $id_video));
        return $this->render('HamsterHubBundle:video:index.html.twig', Array("videos" => $video, "comments" => $comments));
    }

    public function someoneAction($id_user)
    {

        $videos = $this->getDoctrine()->getRepository('HamsterHubBundle:Video')->findBy(array('idUser' => $id_user));
        $user = $this->getDoctrine()->getRepository('HamsterHubBundle:User')->findBy(array('id' => $id_user));

        for ($i = 0; $i < count($videos); $i++) {
            $tab_video = explode("/", $videos[$i]->geturl());
            $videos[$i]->seturl('http://img.youtube.com/vi/' . $tab_video[4] . '/mqdefault.jpg');
        }

        return $this->render('HamsterHubBundle:Someone:index.html.twig', Array("videos" => $videos, "user" => $user[0]->getUsername(), "picture" => $user[0]->getPath()));
    }

    public function pictureAction()
    {
        $user = $this->getDoctrine()->getRepository('HamsterHubBundle:User')->findBy(array('id' => $this->container->get('security.context')->getToken()->getUser()->getId()));
        return $this->render('HamsterHubBundle:Picture:index.html.twig', Array("user" => $user));
    }
}