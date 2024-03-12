<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.install.service' shared service.

return $this->services['mautic.install.service'] = new \Mautic\InstallBundle\Install\InstallService(($this->services['mautic.configurator'] ?? $this->load('getMautic_ConfiguratorService.php')), ($this->services['mautic.helper.cache'] ?? $this->load('getMautic_Helper_CacheService.php')), ($this->services['mautic.helper.paths'] ?? $this->getMautic_Helper_PathsService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->services['validator'] ?? $this->getValidatorService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));