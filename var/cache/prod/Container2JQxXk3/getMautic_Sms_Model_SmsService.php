<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.sms.model.sms' shared service.

$this->services['mautic.sms.model.sms'] = $instance = new \Mautic\SmsBundle\Model\SmsModel(($this->services['mautic.page.model.trackable'] ?? $this->getMautic_Page_Model_TrackableService()), ($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()), ($this->services['mautic.channel.model.queue'] ?? $this->load('getMautic_Channel_Model_QueueService.php')), ($this->services['mautic.sms.transport_chain'] ?? $this->load('getMautic_Sms_TransportChainService.php')), ($this->services['mautic.helper.cache_storage'] ?? $this->getMautic_Helper_CacheStorageService()));

$instance->setEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
$instance->setSecurity(($this->services['mautic.security'] ?? $this->getMautic_SecurityService()));
$instance->setDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
$instance->setTranslator(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
$instance->setUserHelper(($this->services['mautic.helper.user'] ?? $this->getMautic_Helper_UserService()));
$instance->setCoreParametersHelper(($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))));
$instance->setRouter(($this->services['router'] ?? $this->getRouterService()));
$instance->setLogger(($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));

return $instance;