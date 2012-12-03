<?php
require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();
// add twig provider
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app['debug'] = true;
// definitions
$app->get('/', function() use ($app) {
	return $app['twig']->render('homepage.html.twig');
});

$app->run();
