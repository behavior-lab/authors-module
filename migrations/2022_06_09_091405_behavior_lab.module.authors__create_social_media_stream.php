<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BehaviorLabModuleAuthorsCreateSocialMediaStream extends Migration
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
        'slug' => 'social_media',
        'title_column' => 'some_type',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'some_type' => [
            'translatable' => false,
            'required' => true,
        ],
        'url' => [
            'required' => true,
        ],
    ];

}
