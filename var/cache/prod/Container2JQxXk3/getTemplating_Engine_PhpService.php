<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.engine.php' shared service.

@trigger_error('The "templating.engine.php" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

$this->services['templating.engine.php'] = $instance = new \Mautic\CoreBundle\Templating\Engine\PhpEngine(($this->services['templating.name_parser'] ?? $this->load('getTemplating_NameParserService.php')), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'jms_serializer.templating.helper.serializer' => ['privates', 'jms_serializer.templating.helper.serializer', 'getJmsSerializer_Templating_Helper_SerializerService.php', true],
    'knp_menu.templating.helper' => ['privates', 'knp_menu.templating.helper', 'getKnpMenu_Templating_HelperService.php', true],
    'mautic.channel.helper.channel_list' => ['services', 'mautic.channel.helper.channel_list', 'getMautic_Channel_Helper_ChannelListService', false],
    'mautic.helper.notification' => ['services', 'mautic.helper.notification', 'getMautic_Helper_NotificationService.php', true],
    'mautic.helper.sms' => ['services', 'mautic.helper.sms', 'getMautic_Helper_SmsService.php', true],
    'mautic.helper.template.analytics' => ['services', 'mautic.helper.template.analytics', 'getMautic_Helper_Template_AnalyticsService.php', true],
    'mautic.helper.template.avatar' => ['services', 'mautic.helper.template.avatar', 'getMautic_Helper_Template_AvatarService.php', true],
    'mautic.helper.template.button' => ['services', 'mautic.helper.template.button', 'getMautic_Helper_Template_ButtonService.php', true],
    'mautic.helper.template.canvas' => ['services', 'mautic.helper.template.canvas', 'getMautic_Helper_Template_CanvasService.php', true],
    'mautic.helper.template.config' => ['services', 'mautic.helper.template.config', 'getMautic_Helper_Template_ConfigService.php', true],
    'mautic.helper.template.content' => ['services', 'mautic.helper.template.content', 'getMautic_Helper_Template_ContentService.php', true],
    'mautic.helper.template.date' => ['services', 'mautic.helper.template.date', 'getMautic_Helper_Template_DateService.php', true],
    'mautic.helper.template.default_avatar' => ['services', 'mautic.helper.template.default_avatar', 'getMautic_Helper_Template_DefaultAvatarService.php', true],
    'mautic.helper.template.dnc_reason' => ['services', 'mautic.helper.template.dnc_reason', 'getMautic_Helper_Template_DncReasonService.php', true],
    'mautic.helper.template.exception' => ['services', 'mautic.helper.template.exception', 'getMautic_Helper_Template_ExceptionService.php', true],
    'mautic.helper.template.formatter' => ['services', 'mautic.helper.template.formatter', 'getMautic_Helper_Template_FormatterService.php', true],
    'mautic.helper.template.gravatar' => ['services', 'mautic.helper.template.gravatar', 'getMautic_Helper_Template_GravatarService.php', true],
    'mautic.helper.template.mautibot' => ['services', 'mautic.helper.template.mautibot', 'getMautic_Helper_Template_MautibotService.php', true],
    'mautic.helper.template.menu' => ['services', 'mautic.helper.template.menu', 'getMautic_Helper_Template_MenuService.php', true],
    'mautic.helper.template.security' => ['services', 'mautic.helper.template.security', 'getMautic_Helper_Template_SecurityService.php', true],
    'mautic.helper.template.translator' => ['services', 'mautic.helper.template.translator', 'getMautic_Helper_Template_TranslatorService.php', true],
    'mautic.helper.template.version' => ['services', 'mautic.helper.template.version', 'getMautic_Helper_Template_VersionService.php', true],
    'mautic.report.helper.report' => ['services', 'mautic.report.helper.report', 'getMautic_Report_Helper_ReportService.php', true],
    'oneup_uploader.templating.uploader_helper' => ['services', 'oneup_uploader.templating.uploader_helper', 'getOneupUploader_Templating_UploaderHelperService.php', true],
    'templating.helper.actions' => ['privates', 'templating.helper.actions', 'getTemplating_Helper_ActionsService.php', true],
    'templating.helper.assets' => ['services', 'templating.helper.assets', 'getTemplating_Helper_AssetsService.php', true],
    'templating.helper.code' => ['privates', 'templating.helper.code', 'getTemplating_Helper_CodeService.php', true],
    'templating.helper.form' => ['services', 'templating.helper.form', 'getTemplating_Helper_FormService.php', true],
    'templating.helper.logout_url' => ['privates', 'templating.helper.logout_url', 'getTemplating_Helper_LogoutUrlService.php', true],
    'templating.helper.request' => ['privates', 'templating.helper.request', 'getTemplating_Helper_RequestService.php', true],
    'templating.helper.router' => ['privates', 'templating.helper.router', 'getTemplating_Helper_RouterService.php', true],
    'templating.helper.security' => ['privates', 'templating.helper.security', 'getTemplating_Helper_SecurityService.php', true],
    'templating.helper.session' => ['privates', 'templating.helper.session', 'getTemplating_Helper_SessionService.php', true],
    'templating.helper.slots' => ['services', 'templating.helper.slots', 'getTemplating_Helper_SlotsService.php', true],
    'templating.helper.stopwatch' => ['privates', 'templating.helper.stopwatch', 'getTemplating_Helper_StopwatchService.php', true],
    'templating.helper.translator' => ['services', 'templating.helper.translator', 'getTemplating_Helper_TranslatorService.php', true],
], [
    'jms_serializer.templating.helper.serializer' => '?',
    'knp_menu.templating.helper' => '?',
    'mautic.channel.helper.channel_list' => '?',
    'mautic.helper.notification' => '?',
    'mautic.helper.sms' => '?',
    'mautic.helper.template.analytics' => '?',
    'mautic.helper.template.avatar' => '?',
    'mautic.helper.template.button' => '?',
    'mautic.helper.template.canvas' => '?',
    'mautic.helper.template.config' => '?',
    'mautic.helper.template.content' => '?',
    'mautic.helper.template.date' => '?',
    'mautic.helper.template.default_avatar' => '?',
    'mautic.helper.template.dnc_reason' => '?',
    'mautic.helper.template.exception' => '?',
    'mautic.helper.template.formatter' => '?',
    'mautic.helper.template.gravatar' => '?',
    'mautic.helper.template.mautibot' => '?',
    'mautic.helper.template.menu' => '?',
    'mautic.helper.template.security' => '?',
    'mautic.helper.template.translator' => '?',
    'mautic.helper.template.version' => '?',
    'mautic.report.helper.report' => '?',
    'oneup_uploader.templating.uploader_helper' => '?',
    'templating.helper.actions' => '?',
    'templating.helper.assets' => '?',
    'templating.helper.code' => '?',
    'templating.helper.form' => '?',
    'templating.helper.logout_url' => '?',
    'templating.helper.request' => '?',
    'templating.helper.router' => '?',
    'templating.helper.security' => '?',
    'templating.helper.session' => '?',
    'templating.helper.slots' => '?',
    'templating.helper.stopwatch' => '?',
    'templating.helper.translator' => '?',
]), ($this->services['templating.loader'] ?? $this->load('getTemplating_LoaderService.php')), $this->load('getTemplating_GlobalsService.php'));

$instance->setCharset('UTF-8');
$instance->setHelpers(['slots' => 'templating.helper.slots', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'assets' => 'templating.helper.assets', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'mautic.helper.template.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'mautic.helper.template.security', 'knp_menu' => 'knp_menu.templating.helper', 'jms_serializer' => 'jms_serializer.templating.helper.serializer', 'oneup_uploader' => 'oneup_uploader.templating.uploader_helper', 'menu' => 'mautic.helper.template.menu', 'date' => 'mautic.helper.template.date', 'exception' => 'mautic.helper.template.exception', 'gravatar' => 'mautic.helper.template.gravatar', 'analytics' => 'mautic.helper.template.analytics', 'config' => 'mautic.helper.template.config', 'mautibot' => 'mautic.helper.template.mautibot', 'canvas' => 'mautic.helper.template.canvas', 'buttons' => 'mautic.helper.template.button', 'content' => 'mautic.helper.template.content', 'formatter' => 'mautic.helper.template.formatter', 'version' => 'mautic.helper.template.version', 'channel' => 'mautic.channel.helper.channel_list', 'lead_avatar' => 'mautic.helper.template.avatar', 'default_avatar' => 'mautic.helper.template.default_avatar', 'lead_dnc_reason' => 'mautic.helper.template.dnc_reason', 'notification_helper' => 'mautic.helper.notification', 'report' => 'mautic.report.helper.report', 'sms_helper' => 'mautic.helper.sms']);
$instance->setDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
$instance->setRequestStack(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

return $instance;