<?php
/**
 * Slim Application Routes
 * 
 * @url     http://www.slimframework.com/docs/objects/router.html
 */




/**
 * Track Routes
 * 
 * @param   {String}    $request->getAttribute('param')
 * @return  $response
 */
$app->get('/track/[{param}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $name = $request->getAttribute('name');
    $response->getBody()->write("Track Argument", $name);
    return $response;
});




/**
 * Playlist Routes
 * 
 * @param   {String}    $request->getAttribute('param')
 * @return  $response
 */
$app->get('/playlist/[{param}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $name = $request->getAttribute('name');
    $response->getBody()->write("Playlist Argument:", $name);
    return $response;
});




/**
 * Slim Skeleton Routes
 * 
 * @todo    Delete these!
 */
$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    return $response;
});