<?php namespace ConductLab\AuthorsModule\SocialMedia;

use ConductLab\AuthorsModule\SocialMedia\Contract\SocialMediaRepositoryInterface;
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
