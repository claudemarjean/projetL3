<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Jr97Qih' shared service.

return $this->privates['.service_locator.Jr97Qih'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService.php', true],
], [
    'clientRepository' => 'App\\Repository\\ClientRepository',
]);
