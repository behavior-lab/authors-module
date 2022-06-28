<?php

namespace BehaviorLab\AuthorsModule\Author\Support\MultipleFieldType;

use BehaviorLab\ThemesModule\Theme\ThemeRepository;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class LookupTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class LookupTableBuilder extends \Anomaly\MultipleFieldType\Table\LookupTableBuilder
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
        'type',
        'display_name',
        'active' => [
            'value' => "entry.active.value == 1 ? '<span class=\"tag tag-info tag-sm\">Active</span>' : '<span class=\"tag tag-danger tag-sm\">Inactive</span>'",
            'is_safe' => true
        ]
    ];

    /**
     * Fired just before querying
     * for table entries.
     *
     * @param Builder $query
     */
    public function onQuerying(Builder $query)
    {
        $query->where('active', 1);

//        foreach ($query->get() as $item) {
//            dd($item);
//        }
//        dd($query->get());
    }
}
