<?php

class SuppliersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->session->set('active_menu', 'suppliers');
    }

}

