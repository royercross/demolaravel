<?php namespace HireMe\Components;

use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['field'] = $this->app->share(function($app)
        {
            $fieldBuilder = new FieldBuilders($app['form'], $app['view'], $app['session.store']);
            return $fieldBuilder;
        });

        $this->commands('generate.controller');
    }

}