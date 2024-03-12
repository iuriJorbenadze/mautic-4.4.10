<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.asset.formbundle.subscriber' shared service.

return $this->services['mautic.asset.formbundle.subscriber'] = new \Mautic\AssetBundle\EventListener\FormSubscriber(($this->services['mautic.asset.model.asset'] ?? $this->getMautic_Asset_Model_AssetService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.template.analytics'] ?? $this->load('getMautic_Helper_Template_AnalyticsService.php')), ($this->services['templating.helper.assets'] ?? $this->load('getTemplating_Helper_AssetsService.php')), ($this->services['mautic.helper.theme'] ?? $this->getMautic_Helper_ThemeService()), ($this->services['mautic.helper.templating'] ?? ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))));