<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.sync.notification.helper_company' shared service.

return $this->services['mautic.integrations.sync.notification.helper_company'] = new \Mautic\IntegrationsBundle\Sync\Notification\Helper\CompanyHelper(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));