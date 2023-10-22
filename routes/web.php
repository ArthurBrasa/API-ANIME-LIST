<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/api/documentation', function () use ($router) {
    return view('swagger');
});
$router->get('/', function () use ($router) {
    return redirect('/api/documentation');
});

$router->get('/api/oauth2-callback', 'AuthController@handleOAuth2Callback');



$router->group(['prefix' => 'api'], function  () use ($router) {

    # Grupo com token
    $router->group(['middleware' => 'token_authenticate'], function () use ($router) {
        $router->get('/login', function () use ($router) {
            return ['status' => "logado"];
        });
    });

    $router->group(['prefix' => 'v1'], function () use ($router) {
        

        $router->get('/anime', ['as' => 'all_animes', 'uses' => 'AnimeListController@index']);
        $router->get('/anime/{title}', ['as' => 'preview', 'uses' => 'AnimeListController@list']);
        $router->post('/anime', ['as' => 'create', 'uses' => 'AnimeListController@create', 'middleware' => 'token_authenticate']);
        $router->put('/anime/{id}', ['as' => 'update', 'uses' => 'AnimeListController@update', 'middleware' => 'token_authenticate']);
        $router->delete('/anime/{id}', ['as' => 'delete', 'uses' => 'AnimeListController@delete', 'middleware' => 'token_authenticate']);
        # rota com controller


        

    });

    $router->get('{any:.*}', function () {
        return response()->json([
            'Status' => 'Não Achei o que está procurando! :/',
            'links' => [
                'all_animes' => route('all_animes'),
                'preview' => route('preview', ['title' => 'naruto'])
            ]
        ], 404);
    });

});

// # rota com middleware
// $router->get('/', ['middleware' => 'token_authenticate', function () use ($router) {
//     return ['status' => "logado"];
// }]);

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// $router->get('/login', function() use ($router) {
//     return ['status' => "logado"];
// });
// $router->get('/login', ['middleware' => 'token_authenticate', function () use ($router) {
//     return ['status' => "logado"];
// }]);
