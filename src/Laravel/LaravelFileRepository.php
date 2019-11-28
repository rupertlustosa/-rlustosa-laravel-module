<?php


namespace RLustosa\LaravelModulating\Laravel;


use RLustosa\LaravelModulating\Modules\FileRepository;

class LaravelFileRepository extends FileRepository
{

    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}