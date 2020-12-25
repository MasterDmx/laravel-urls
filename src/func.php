<?php

use MasterDmx\LaravelUrls\UrlsManager;

function get_url(string $alias, array $options = [], $default = null)
{
    return app(UrlsManager::class)->get($alias, $options, $default);
}
