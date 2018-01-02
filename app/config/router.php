<?php

$router = $di->getRouter();

$router->add(
    '/',
    [
        'controller' => 'dashboard',
        'action' => 'index'
    ]
);

$router->add(
    '/inspection',
    [
        'controller' => 'inspection',
        'action' => 'vanInspection'
    ]
);

$router->add(
    '/van_inspection',
    [
        'controller' => 'inspection',
        'action' => 'vanInspection'
    ]
);

$router->add(
    '/roll_inspection',
    [
        'controller' => 'inspection',
        'action' => 'rollInspection'
    ]
);

$router->add(
    '/rr_encoding',
    [
        'controller' => 'receiving_report',
        'action' => 'encoding'
    ]
);

$router->add(
    '/rr_review',
    [
        'controller' => 'receiving_report',
        'action' => 'forReview'
    ]
);

$router->add(
    '/rr_approval',
    [
        'controller' => 'receiving_report',
        'action' => 'forApproval'
    ]
);

$router->add(
    '/syslogs',
    [
        'controller' => 'system_logs',
        'action' => 'index'
    ]
);

$router->handle();
