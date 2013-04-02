<?php
require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();
// add twig provider
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app['debug'] = false;
// definitions
$app->get('/', function() use ($app) {
	$nowTimeStamp = strtotime("now");
	$startTimeStamp = strtotime("29 march 2013 13:00:00");
	$endTimeStamp = strtotime("2 april 2013 17:00:00");
	return $app['twig']->render('homepage.html.twig', compact('nowTimeStamp', 'startTimeStamp', 'endTimeStamp'));
});

$app->run();
