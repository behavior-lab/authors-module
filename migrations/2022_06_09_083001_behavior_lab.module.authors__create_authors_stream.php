<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BehaviorLabModuleAuthorsCreateAuthorsStream extends Migration
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
        'slug'         => 'author',
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
        'first_name' => [
            'translatable' => false,
            'required' => false,
        ],
        'last_name' => [
            'translatable' => false,
            'required' => false,
        ],
        'display_name' => [
            'translatable' => false,
            'required' => true,
        ],
        'slug' => [
            'translatable' => false,
            'required' => true,
        ],
        'avatar' => [
            'translatable' => false,
            'required' => false,
        ],
        'job_title' => [
            'translatable' => true,
            'required' => false,
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
        'mobile' => [
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
