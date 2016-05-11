<?php

namespace HamsterHubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PictureController extends Controller
{
    public function uploadAction(Request $info)
    {

        $file = new File($info->get('path'));

        var_dump($file);
        return new Response("Yo");
    }
}