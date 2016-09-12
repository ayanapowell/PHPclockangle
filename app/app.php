<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Clockangle.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));


    $app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->post('/process', function() use ($app) {
        $clock = new Clockangle;
        $result = $clock->getAngleDifference($_POST['hour'], $_POST['minutes']);
        return $app['twig']->render('results.html.twig', array('results'=>$result));
    });

    return $app;
?>
