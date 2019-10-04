<?php

namespace Mustorze\ConfigTags;

use Illuminate\Support\ServiceProvider;
use Laravel\Horizon\Contracts\TagRepository;

class HorizonConfigTagsProvider extends ServiceProvider
{
    /**
     * Initialize the default monitored tags
     */
    public function boot()
    {
        $repository = app(TagRepository::class);
        $defaultTags = config('horizon.monitored_tags');

        if (! is_array($defaultTags)) {
            return;
        }

        foreach ($defaultTags as $tag) {
            $repository->monitor($tag);
        }
    }
}
