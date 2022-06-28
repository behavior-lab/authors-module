<?php namespace BehaviorLab\AuthorsModule\SocialMedia;

use BehaviorLab\AuthorsModule\SocialMedia\Contract\SocialMediaRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SocialMediaRepository extends EntryRepository implements SocialMediaRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SocialMediaModel
     */
    protected $model;

    /**
     * Create a new SocialMediaRepository instance.
     *
     * @param SocialMediaModel $model
     */
    public function __construct(SocialMediaModel $model)
    {
        $this->model = $model;
    }
}
