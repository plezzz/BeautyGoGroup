<?php

namespace BeautyGoGroupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class test2Controller extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
