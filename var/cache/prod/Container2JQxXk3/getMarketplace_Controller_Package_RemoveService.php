<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'marketplace.controller.package.remove' shared service.

$this->services['marketplace.controller.package.remove'] = $instance = new \Mautic\MarketplaceBundle\Controller\Package\RemoveController(($this->services['marketplace.model.package'] ?? $this->load('getMarketplace_Model_PackageService.php')), ($this->services['marketplace.service.route_provider'] ?? $this->load('getMarketplace_Service_RouteProviderService.php')), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()), ($this->services['marketplace.service.config'] ?? $this->getMarketplace_Service_ConfigService()));

$instance->setContainer($this);

return $instance;
