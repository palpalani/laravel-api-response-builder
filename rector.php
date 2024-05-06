<?php

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/src/',
        // __DIR__ . '/src/WholeDirectory',
    ])
    // ->withIndent(indentChar: ' ', indentSize: 4)
    ->withPreparedSets(
        deadCode: true,
        earlyReturn: true,
        codeQuality: true,
        codingStyle: true
    );
