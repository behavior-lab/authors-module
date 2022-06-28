<?php namespace BehaviorLab\AuthorsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class AuthorsModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fas fa-chalkboard-teacher';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'authors' => [
            'buttons' => [
                'new_author',
            ],
        ],
        'publishers' => [
            'buttons' => [
                'new_publisher',
            ],
        ],
    ];

}
