<?php

// Home page
$app->get('/', function () use ($app) {
    $visiteurs = $app['dao.visiteur']->findAll();
    return $app['twig']->render('index.html.twig', array('visiteurs' => $visiteurs));
});

