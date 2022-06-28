<?php

namespace BehaviorLab\AuthorsModule\Author\Support\MultipleFieldType;

/**
 * Class ValueTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class ValueTableBuilder extends \Anomaly\MultipleFieldType\Table\ValueTableBuilder
{
    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'avatar' => [
            'value' => 'entry.avatar.preview',
            'is_safe' => true
        ],
        'display_name'
    ];
//    protected $columns = [
//        'field_name',
//        'field_type' => [
//            'value' => "entry.field_type_value"
//        ],
//        'field_required' => [
//            'value' => "entry.field_required.value == 1 ? 'Required' : ''"
//        ]
//    ];
}
