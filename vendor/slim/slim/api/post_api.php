<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 30/1/2017
 * Time: 1:13 AM
 */
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/post', function (Request $request, Response $response) {
    $posts = Post::all();
    return $response->withJson($posts);
});

$app->delete('/post/[{id}]', function ($request, $response, $args) {
    $id = $args['id'];
    $posts =Post::destroy($id);
    return $response->withJson($posts);
});

$app->post('/post/[{id}]', function ($request, $response, $args) {
    $input = $request->getParsedBody();

    $posts = Post::create(array(
        'text' => $input['text']
    ));

    return $response->withJson($posts);
});

$app->put('/post/[{id}]', function ($request, $response, $args) {
    $input = $request->getParsedBody();
    Post::where('id', $args['id'])->update(['text' => $input['text']]);

    return $response->withJson($input);
});

