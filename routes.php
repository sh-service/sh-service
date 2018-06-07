<?php
$app = new Http();

$app->get('/',function($app){
    $app->json('Welcome to SH service');
});

# Dynamic Routes
$app->get('/name/:firstname',function($app,$req,$res){
	$res->json(' Firstname : '.$req->firstname);
});
# Without Authendication Links like about, service pages
$app->page('/home',function($app){
    $app->html('home');
});

$app->run(); # Extender

?>