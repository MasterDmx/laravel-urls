<?php

namespace MasterDmx\LaravelUrls;

class UrlsManager
{
    private $urls = [];

    public function define(string $alias, callable $callback)
    {
        $this->urls[$alias] = $callback;
    }

    public function get(string $alias, array $options = [], $default = null)
    {
        return $this->has($alias) ? $this->urls[$alias]($options) : $default;
    }

    public function has(string $alias)
    {
        return isset($this->urls[$alias]);
    }
}
