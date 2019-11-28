<?php


namespace RLustosa\LaravelModulating\Providers;


use Illuminate\Support\ServiceProvider;
use RLustosa\LaravelModulating\Commands\ModuleMakeCommand;
use RLustosa\LaravelModulating\Commands\SetupCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        SetupCommand::class,
        ModuleMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }

}
