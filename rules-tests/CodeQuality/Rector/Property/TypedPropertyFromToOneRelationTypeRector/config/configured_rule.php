<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Doctrine\CodeQuality\Rector\Property\TypedPropertyFromToOneRelationTypeRector;
use Rector\ValueObject\PhpVersionFeature;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(
        TypedPropertyFromToOneRelationTypeRector::class,
        [
            TypedPropertyFromToOneRelationTypeRector::FORCE_NULLABLE => false,
        ]
    );

    $rectorConfig->phpVersion(PhpVersionFeature::UNION_TYPES);
};
