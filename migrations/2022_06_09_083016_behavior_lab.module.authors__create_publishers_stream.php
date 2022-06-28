<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BehaviorLabModuleAuthorsCreatePublishersStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'publishers',
        'title_column' => 'display_name',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'type' => [
            'translatable' => false,
            'required' => true,
        ],
        'display_name' => [
            'translatable' => false,
            'required' => true,
        ],
        'logo' => [
            'translatable' => false,
            'required' => true,
        ],
        'slug' => [
            'translatable' => false,
            'required' => true,
        ],
        'url' => [
            'translatable' => false,
            'required' => false,
        ],
        'email' => [
            'translatable' => false,
            'required' => false,
        ],
        'phone' => [
            'translatable' => false,
            'required' => false,
        ],
        'address' => [
            'translatable' => false,
            'required' => false,
        ],
        'social_media' => [
            'translatable' => false,
            'required' => false,
        ],
        'active' => [
            'translatable' => false,
            'required' => false,
        ],
    ];

}
