<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.native.connector' shared service.

return $this->services['mautic.native.connector'] = \Symfony\Component\HttpClient\HttpClient::create();