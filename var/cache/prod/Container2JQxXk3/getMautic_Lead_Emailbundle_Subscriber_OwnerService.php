<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.emailbundle.subscriber.owner' shared service.

return $this->services['mautic.lead.emailbundle.subscriber.owner'] = new \Mautic\LeadBundle\EventListener\OwnerSubscriber(($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));