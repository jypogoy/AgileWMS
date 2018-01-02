<?php

class WarehousesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->session->set('active_menu', 'warehouses');
    }

}

