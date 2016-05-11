<?php

namespace HamsterHubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use HamsterHubBundle\Entity\Video;

class VideoController extends Controller
{
    public function uploadAction(Request $info)
    {
        $name = $info->get("name");
        $description = $info->get("description");
        $url = $info->get("url");
        $id_user = $this->container->get('security.context')->getToken()->getUser()->getId();

        $video = new Video();

        $urlCut = $url;
        $cut1 = explode("v=", $urlCut);

        if (count($cut1) == 2) {
            $cut1[0] = "https://www.youtube.com/embed/";
            $cut2 = explode("&", $cut1[1]); //playlist
            $urlCut = $cut1[0] . $cut2[0];
            if (count($cut2) == 3) {
                $urlCut = $cut1[0] . $cut2[0] . "?" . $cut2[1];
            }
            $video->setUrl($urlCut);
        }

        $video->setDescription($description);
        $video->setName($name);
        $video->setIdUser($id_user);
        $video->setUser($this->getUser());

        $video->setDate(new \DateTime(date('Y-m-d H:i:s')));

        $em = $this->getDoctrine()->getManager();
        $em->persist($video);
        $em->flush();


        $tab_video = explode("/", $video->geturl());
        $video->seturl('http://img.youtube.com/vi/' . $tab_video[4] . '/mqdefault.jpg');


        $json = json_encode(Array("day" => $video->getDate()->format('Y-m-d'),
            "hour" => $video->getDate()->format('H:i:s'),
            "user" => $video->getUser()->getUsername(),
            "content" => $video->getDescription(),
            "url" => $video->getUrl(),
            "title" => $video->getName(),
            "id" => $video->getId()
        ));

        return new Response($json);
    }

    public function deleteAction(Request $info)
    {
        $em = $this->getDoctrine()->getManager();

        $video = $em->getRepository('HamsterHubBundle:Video')->find($info->get('id'));
        $commentaires = $em->getRepository('HamsterHubBundle:Comments')->findBy(Array('idVideo' => $info->get('id')));

        $em->remove($video);
        for ($i = 0; $i < count($commentaires); $i++) {
            $em->remove($commentaires[$i]);
        }
        $em->flush();

        return new Response(json_encode(Array("id" => $info->get('id'))));
    }
}