<?php

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;
$configurator->setDebugMode(getenv('DEVELOPMENT_MACHINE') === 'true' ?: '78.45.163.71');
$configurator->enableDebugger(__DIR__ . '/../log-nette');
$configurator->setTempDirectory(__DIR__ . '/../temp-nette');

$configurator->createRobotLoader()
    ->addDirectory(__DIR__)
    ->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
