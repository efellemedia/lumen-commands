<?php

namespace Efelle\LumenCommands;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use Efelle\LumenCommands\Console\ConsoleMakeCommand;
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
        $this->registerConsoleMakeCommand();
        $this->registerKeyGenerateCommand();
    }
    
    /**
     * Register the key:generate command.
     */
    protected function registerConsoleMakeCommand()
    {
        $this->app->singleton(ConsoleMakeCommand::class, function () {
            $filesystem = app()->make(Filesystem::class);
            
            return new ConsoleMakeCommand($filesystem);
        });
        
        $this->commands(ConsoleMakeCommand::class);
    }
    
    /**
     * Register the key:generate command.
     */
    protected function registerKeyGenerateCommand()
    {
        $this->app->singleton(KeyGenerateCommand::class, function () {
            return new KeyGenerateCommand;
        });
        
        $this->commands(KeyGenerateCommand::class);
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            ConsoleMakeCommand::class,
            KeyGenerateCommand::class,
        ];
    }
}
