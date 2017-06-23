<?php

namespace Efelle\LumenCommands;

use Illuminate\Support\ServiceProvider;
use Efelle\LumenCommands\Console\KeyGenerateCommand;

class LumenCommandsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->registerKeyGenerateCommand();
    }
    
    /**
     * Register the key:generate command.
     */
    protected function registerKeyGenerateCommand()
    {
        $this->app->singleton(KeyGenerateCommand::class, function () {
            return new KeyGenerateCommand;
        });
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            KeyGenerateCommand::class,
        ];
    }
}
