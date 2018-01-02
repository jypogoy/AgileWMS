<?php

class ReceivingReportController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function encodingAction()
    {
        $this->session->set('active_menu', 'rr_encoding');
    }

    public function forReviewAction()
    {
        $this->session->set('active_menu', 'rr_review');
    }

    public function forApprovalAction()
    {
        $this->session->set('active_menu', 'rr_approval');
    }

}

