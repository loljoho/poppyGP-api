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
    $param = $request->getAttribute('param');
    $response->getBody()->write("Track Argument " . $param);
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
    $param = $request->getAttribute('param');
    $response->getBody()->write("Playlist Argument " . $param);
    return $response;
});
