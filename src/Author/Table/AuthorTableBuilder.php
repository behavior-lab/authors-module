<?php namespace BehaviorLab\AuthorsModule\Author\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class AuthorTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'avatar' => [
            'value' => 'entry.avatar.preview',
            'is_safe' => true
        ],
        'type',
        'display_name',
        'active' => [
            'value' => "entry.active.value == 1 ? '<span class=\"tag tag-info tag-sm\">Yes</span>' : '<span class=\"tag tag-danger tag-sm\">No</span>'",
            'is_safe' => true
        ]
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
