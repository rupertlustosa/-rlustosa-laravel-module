<?php

namespace RLustosa\LaravelModulating\Providers;

use Illuminate\Support\ServiceProvider;
use RLustosa\LaravelModulating\Contracts\RepositoryInterface;
use RLustosa\LaravelModulating\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
