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

$router->get('/', function () use ($router) {
    return "Distributor is working fine";
});


$router->group(['prefix' => '/transactions', ], function($router)
{
    $router->get('/',function () use ($router) {
        return "Transactions is working fine";
    });

    $router->get('/get', "TransactionController@index");
    $router->Post('/create', "TransactionController@createTransaction");
    $router->Post('/delete', "TransactionController@deleteTransactions");
    $router->Post('/update', "TransactionController@updateTransactions");
    
});

$router->group(['prefix' => '/beneficiaries', ], function($router)
{
    $router->get('/',function () use ($router) {
        return "Beneficiaries is working fine";
    });
    $router->get('/get', "BeneficiariesController@index");
    $router->Post('/create', "BeneficiariesController@createBeneficiaries");
    $router->Post('/delete', "BeneficiariesController@deleteBeneficiaries");
    $router->Post('/update', "BeneficiariesController@updateBeneficiaries");
    
});

$router->group(['prefix' => '/distributor', ], function($router)
{
    $router->get('/',function () use ($router) {
        return "Distribute is working fine";
    });
    $router->get('/get', "BeneficiariesController@index");
    $router->Post('/create', "BeneficiariesController@createBeneficiaries");
    $router->Post('/delete', "BeneficiariesController@deleteBeneficiaries");
    $router->Post('/update', "BeneficiariesController@updateBeneficiaries");
    
});
