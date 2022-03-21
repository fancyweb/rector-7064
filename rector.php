<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator
        ->parameters()
            ->set(Option::PATHS, [
                __DIR__.'/tests',
            ])
            ->set(Option::BOOTSTRAP_FILES, [
                __DIR__.'/vendor/bin/.phpunit/phpunit-9.5-0/vendor/autoload.php',
            ]);

    $containerConfigurator->import(SetList::DEAD_CODE);
    $containerConfigurator->import(SetList::EARLY_RETURN);
    $containerConfigurator->import(LevelSetList::UP_TO_PHP_81);
};
