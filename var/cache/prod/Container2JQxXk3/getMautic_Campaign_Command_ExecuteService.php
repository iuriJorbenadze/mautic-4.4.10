<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.command.execute' shared service.

return $this->services['mautic.campaign.command.execute'] = new \Mautic\CampaignBundle\Command\ExecuteEventCommand(($this->services['mautic.campaign.executioner.scheduled'] ?? $this->load('getMautic_Campaign_Executioner_ScheduledService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.template.formatter'] ?? $this->load('getMautic_Helper_Template_FormatterService.php')));
