<?php

class InspectionController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        
    }

    public function vanInspectionAction()
    {
        $this->session->set('active_menu', 'van_inspection');
    }

    public function rollInspectionAction()
    {
        $this->session->set('active_menu', 'roll_inspection');
    }
}

