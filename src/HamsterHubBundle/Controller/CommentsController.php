<?php

namespace HamsterHubBundle\Controller;

use HamsterHubBundle\Entity\Comments;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CommentsController extends Controller
{
    public function sendAction(Request $info)
    {
        $content = $info->get("comment");
        $id_video = $info->get("id");

        $id_user = $this->container->get('security.context')->getToken()->getUser()->getId();

        $comment = new Comments();

        $comment->setDate(new \DateTime(date('Y-m-d H:i:s')));
        $comment->setIdUser($id_user);
        $comment->setContent($content);
        $comment->setIdVideo($id_video);
        $comment->setUser($this->getUser());


        $em = $this->getDoctrine()->getManager();
        $em->persist($comment);
        $em->flush();

        $json = json_encode(Array("day" => $comment->getDate()->format('Y-m-d'),
            "hour" => $comment->getDate()->format('H:i:s'),
            "user" => $this->getUser()->getUsername(),
            "content" => $comment->getContent(),
            "userId" => $this->getUser()->getId()
        ));

        return new Response($json);
    }

    public function deleteAction(Request $info)
    {
        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('HamsterHubBundle:Comments')->find($info->get('id'));

        $em->remove($commentaires);

        $em->flush();

        return new Response(json_encode(Array("id" => $info->get('id'))));
    }
}