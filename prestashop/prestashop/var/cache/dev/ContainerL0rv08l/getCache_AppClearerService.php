<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.app_clearer' shared service.

return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'memcached' => ($this->privates['memcached'] ?? $this->getMemcachedService()), 'prestashop.static_cache.adapter' => ($this->services['prestashop.static_cache.adapter'] ?? $this->getPrestashop_StaticCache_AdapterService())]);
