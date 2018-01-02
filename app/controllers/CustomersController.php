<?php

class CustomersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->session->set('active_menu', 'customers');
    }

    public function newAction()
    {
        $this->session->set('active_menu', 'customers');
    }

    public function createAction()
    {
        $this->session->set('active_menu', 'customers');
    }
}

