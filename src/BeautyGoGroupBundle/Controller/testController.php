<?php

namespace BeautyGoGroupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class testController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
