<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.subscriber.aggregate_stats' shared service.

return $this->services['mautic.email.subscriber.aggregate_stats'] = new \Mautic\EmailBundle\EventListener\GraphAggregateStatsSubscriber(($this->services['mautic.email.helper.stats_collection'] ?? $this->load('getMautic_Email_Helper_StatsCollectionService.php')));