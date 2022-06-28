<?php

namespace BehaviorLab\AuthorsModule\Author\Support;

use Anomaly\SelectFieldType\SelectFieldType;
use Illuminate\Support\Str;

class TypeSelectOptions
{
    const OPTIONS = [
        'Person' => 'Person',
        'Organization' => 'Organization'
    ];

    public function options(): array
    {
        return self::OPTIONS;
    }

    public function handle(SelectFieldType $fieldType): void
    {
        $fieldType->setOptions(self::OPTIONS);
    }

    public static function getConstValue($constName): ?string
    {
        if(array_key_exists($constName, self::OPTIONS)) {
            return self::OPTIONS[$constName];
        } else {
            return null;
        }
    }
}
