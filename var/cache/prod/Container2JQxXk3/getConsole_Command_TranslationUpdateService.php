<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_update' shared service.

$a = new \Symfony\Component\Translation\Writer\TranslationWriter();
$a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
$a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
$a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
$a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
$a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
$a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
$a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
$a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
$a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
$a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
$a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

$this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), $this->getEnv('nullable:resolve:MAUTIC_LOCALE'), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core/Resources/translations')], [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/bundles'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form')]);

$instance->setName('translation:update');

return $instance;
