<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap/app.php',
        __DIR__.'/bootstrap/providers.php',
        __DIR__.'/config',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])

    // add a single rule
    ->withRules([
        NoUnusedImportsFixer::class,
    ])

    // use the php cs fixer sets
    ->withPhpCsFixerSets(
        perCS20: true,
        php83Migration: true,
    )

    // add sets - group of rules
    ->withPreparedSets(
        symplify: true,
        laravel: true,
        arrays: true,
        comments: true,
        docblocks: true,
        spaces: true,
        namespaces: true,
        phpunit: true,
     )

     ;
