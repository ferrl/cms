<?php

namespace App\Modules\Backend;

use Ferrl\Modular\ModuleDefinition;
use Illuminate\Routing\Router;

class Module extends ModuleDefinition
{
    /**
     * Bind application routes.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function bindRoutes(Router $router)
    {
        $router->group(['prefix' => 'admin', 'middleware' => 'web'], function (Router $router) {
            // Authentication routes
            $router->get('sign_in', ['as' => 'backend.auth.login', 'uses' => 'Auth\AuthController@getLogin']);
            $router->post('sign_in', ['as' => 'backend.auth.login', 'uses' => 'Auth\AuthController@postLogin']);
        });
    }
}
