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

/**
 * Routes for resource material
 */
$app->get('material', 'MaterialsController@all');
$app->get('material/{id}', 'MaterialsController@get');
$app->post('material', 'MaterialsController@add');
$app->put('material/{id}', 'MaterialsController@put');
$app->delete('material/{id}', 'MaterialsController@remove');

/**
 * Routes for resource environment
 */
$app->get('environment', 'EnvironmentsController@all');
$app->get('environment/{id}', 'EnvironmentsController@get');
$app->post('environment', 'EnvironmentsController@add');
$app->put('environment/{id}', 'EnvironmentsController@put');
$app->delete('environment/{id}', 'EnvironmentsController@remove');

/**
 * Routes for resource instance
 */
$app->get('instance', 'InstancesController@all');
$app->get('instance/{id}', 'InstancesController@get');
$app->post('instance', 'InstancesController@add');
$app->put('instance/{id}', 'InstancesController@put');
$app->delete('instance/{id}', 'InstancesController@remove');

/**
 * Routes for resource material
 */
$app->get('material', 'MaterialsController@all');
$app->get('material/{id}', 'MaterialsController@get');
$app->post('material', 'MaterialsController@add');
$app->put('material/{id}', 'MaterialsController@put');
$app->delete('material/{id}', 'MaterialsController@remove');

/**
 * Routes for resource environment
 */
$app->get('environment', 'EnvironmentsController@all');
$app->get('environment/{id}', 'EnvironmentsController@get');
$app->post('environment', 'EnvironmentsController@add');
$app->put('environment/{id}', 'EnvironmentsController@put');
$app->delete('environment/{id}', 'EnvironmentsController@remove');

/**
 * Routes for resource instance
 */
$app->get('instance', 'InstancesController@all');
$app->get('instance/{id}', 'InstancesController@get');
$app->post('instance', 'InstancesController@add');
$app->put('instance/{id}', 'InstancesController@put');
$app->delete('instance/{id}', 'InstancesController@remove');

/**
 * Routes for resource action
 */
$app->get('action', 'ActionsController@all');
$app->get('action/{id}', 'ActionsController@get');
$app->post('action', 'ActionsController@add');
$app->put('action/{id}', 'ActionsController@put');
$app->delete('action/{id}', 'ActionsController@remove');

/**
 * Routes for resource scenario
 */
$app->get('scenario', 'ScenariosController@all');
$app->get('scenario/{id}', 'ScenariosController@get');
$app->post('scenario', 'ScenariosController@add');
$app->put('scenario/{id}', 'ScenariosController@put');
$app->delete('scenario/{id}', 'ScenariosController@remove');

/**
 * Routes for resource trigger
 */
$app->get('trigger', 'TriggersController@all');
$app->get('trigger/{id}', 'TriggersController@get');
$app->post('trigger', 'TriggersController@add');
$app->put('trigger/{id}', 'TriggersController@put');
$app->delete('trigger/{id}', 'TriggersController@remove');