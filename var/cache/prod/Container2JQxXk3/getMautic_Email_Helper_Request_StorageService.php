<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.helper.request.storage' shared service.

return $this->services['mautic.email.helper.request.storage'] = new \Mautic\EmailBundle\Helper\RequestStorageHelper(($this->services['mautic.helper.cache_storage'] ?? $this->getMautic_Helper_CacheStorageService()));
