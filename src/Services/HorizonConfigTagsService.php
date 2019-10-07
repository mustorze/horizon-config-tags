<?php

namespace Mustorze\ConfigTags\Services;

use Laravel\Horizon\Contracts\TagRepository;

class HorizonConfigTagsService
{
    public static $environment = 'production';

    /**
     * Boot the monitored tags
     */
    public static function boot()
    {
        if (!app()->environment(self::$environment)) {
            return;
        }

        $repository = app(TagRepository::class);
        $defaultTags = config('horizon.monitored_tags');

        if (!is_array($defaultTags)) {
            return;
        }

        foreach ($defaultTags as $tag) {
            $repository->monitor($tag);
        }
    }

    /**
     * Set environment
     *
     * @param string $env
     * @return static
     */
    public static function environment(string $env)
    {
        static::$environment = $env;

        return new static;
    }
}
