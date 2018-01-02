<?php

class ShippinglinesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->session->set('active_menu', 'shipping_lines');
    }

}

