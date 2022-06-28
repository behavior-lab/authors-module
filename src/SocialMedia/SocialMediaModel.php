<?php namespace BehaviorLab\AuthorsModule\SocialMedia;

use BehaviorLab\AuthorsModule\SocialMedia\Contract\SocialMediaInterface;
use Anomaly\Streams\Platform\Model\Authors\AuthorsSocialMediaEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialMediaModel extends AuthorsSocialMediaEntryModel implements SocialMediaInterface
{
    use HasFactory;

    /**
     * @return SocialMediaFactory
     */
    protected static function newFactory()
    {
        return SocialMediaFactory::new();
    }
}
