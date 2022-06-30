<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BehaviorLabModuleAuthorsCreateAuthorsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'first_name' => 'anomaly.field_type.text',
        'last_name' => 'anomaly.field_type.text',
        'display_name' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'display_name',
                'type' => '_'
            ],
        ],
        'type' => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'mode' => 'dropdown',
                "handler" => \ConductLab\AuthorsModule\Author\Support\TypeSelectOptions::class
            ],
        ],
        'job_title' => 'anomaly.field_type.text',
        'url' => 'anomaly.field_type.url',
        'email' => 'anomaly.field_type.email',
        'phone' => 'anomaly.field_type.text',
        'mobile' => 'anomaly.field_type.text',
        'address' => [
            'type' => 'anomaly.field_type.textarea',
            'config' => [
                "rows" => 3,
            ],
        ],
        'avatar' => [
            'type' => 'anomaly.field_type.file',
            'config' => [],
        ],
        'logo' => [
            'type' => 'anomaly.field_type.file',
            'config' => [],
        ],
        'social_media' => [
            "type" => "anomaly.field_type.repeater",
            "config" => [
                "related" => \ConductLab\AuthorsModule\SocialMedia\SocialMediaModel::class,
                "add_row" => "dk_behavior.module.checklists::button.add_checklist_section",
            ]
        ],
        'some_type' => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'mode' => 'dropdown',
                "handler" => \ConductLab\AuthorsModule\SocialMedia\Support\TypeSelectOptions::class
            ],
        ],
        'active' => [
            'type' => 'anomaly.field_type.boolean',
            "config" => [
                "default_value" => true,
            ]
        ],
    ];

}
