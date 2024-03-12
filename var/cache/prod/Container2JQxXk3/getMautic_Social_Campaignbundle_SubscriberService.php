<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.social.campaignbundle.subscriber' shared service.

return $this->services['mautic.social.campaignbundle.subscriber'] = new \MauticPlugin\MauticSocialBundle\EventListener\CampaignSubscriber(($this->services['mautic.social.helper.campaign'] ?? $this->load('getMautic_Social_Helper_CampaignService.php')), ($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));