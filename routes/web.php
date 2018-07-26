<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});

/* User Endpoints */
$app->group(['prefix' => 'user'], function () use ($app) {
    $app->get('/', [
        'as' => 'userList', 'uses' => 'UserController@list'
    ]);

    $app->post('/', [
        'as' => 'userNew', 'uses' => 'UserController@new'
    ]);

    $app->get('/{userId}', [
        'as' => 'userDetail', 'uses' => 'UserController@detail'
    ]);

    $app->put('/{userId}', [
        'as' => 'userUpdate', 'uses' => 'UserController@update'
    ]);

    $app->delete('/{userId}', [
        'as' => 'userDelete', 'uses' => 'UserController@delete'
    ]);
});

/* Scene Endpoints */
$app->group(['prefix' => 'scene'], function () use ($app) {
    $app->get('/', [
        'as' => 'sceneList', 'uses' => 'SceneController@list'
    ]);

    $app->post('/', [
        'as' => 'sceneNew', 'uses' => 'SceneController@new'
    ]);

    $app->get('/{sceneId}', [
        'as' => 'sceneDetail', 'uses' => 'SceneController@detail'
    ]);

    $app->put('/{sceneId}', [
        'as' => 'sceneUpdate', 'uses' => 'SceneController@update'
    ]);

    $app->delete('/{sceneId}', [
        'as' => 'sceneDelete', 'uses' => 'SceneController@delete'
    ]);
});

/* Material Endpoints */
$app->group(['prefix' => 'material'], function () use ($app) {
    $app->get('/', [
        'as' => 'materialList', 'uses' => 'MaterialController@list'
    ]);

    $app->post('/', [
        'as' => 'materialNew', 'uses' => 'MaterialController@new'
    ]);

    $app->get('/{materialId}', [
        'as' => 'materialDetail', 'uses' => 'MaterialController@detail'
    ]);

    $app->put('/{materialId}', [
        'as' => 'materialUpdate', 'uses' => 'MaterialController@update'
    ]);

    $app->delete('/{materialId}', [
        'as' => 'materialDelete', 'uses' => 'MaterialController@delete'
    ]);
});

/* Action Endpoints */
$app->group(['prefix' => 'action'], function () use ($app) {
    $app->get('/', [
        'as' => 'actionList', 'uses' => 'ActionController@list'
    ]);

    $app->post('/', [
        'as' => 'actionNew', 'uses' => 'ActionController@new'
    ]);

    $app->get('/{actionId}', [
        'as' => 'actionDetail', 'uses' => 'ActionController@detail'
    ]);

    $app->put('/{actionId}', [
        'as' => 'actionUpdate', 'uses' => 'ActionController@update'
    ]);

    $app->delete('/{actionId}', [
        'as' => 'actionDelete', 'uses' => 'ActionController@delete'
    ]);
});

/* Environment Endpoints */
$app->group(['prefix' => 'environment'], function () use ($app) {
    $app->get('/', [
        'as' => 'environmentList', 'uses' => 'EnvironmentController@list'
    ]);

    $app->post('/', [
        'as' => 'environmentNew', 'uses' => 'EnvironmentController@new'
    ]);

    $app->get('/{environmentId}', [
        'as' => 'environmentDetail', 'uses' => 'EnvironmentController@detail'
    ]);

    $app->put('/{environmentId}', [
        'as' => 'environmentUpdate', 'uses' => 'EnvironmentController@update'
    ]);

    $app->delete('/{environmentId}', [
        'as' => 'environmentDelete', 'uses' => 'EnvironmentController@delete'
    ]);
});