<?php

namespace Mustorze\ConfigTags;

use Illuminate\Support\ServiceProvider;
use Mustorze\ConfigTags\Services\HorizonConfigTagsService;

class HorizonConfigTagsProvider extends ServiceProvider
{
    /**
     * Initialize the default monitored tags
     */
    public function boot()
    {
        HorizonConfigTagsService::boot();
    }
}
