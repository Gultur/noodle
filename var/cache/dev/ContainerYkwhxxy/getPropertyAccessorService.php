<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'property_accessor' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyAccess/PropertyAccessorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyAccess/PropertyAccessor.php';

return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->load(__DIR__.'/getCache_PropertyAccessService.php')) && false ?: '_'});
