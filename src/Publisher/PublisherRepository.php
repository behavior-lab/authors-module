<?php namespace ConductLab\AuthorsModule\Publisher;

use ConductLab\AuthorsModule\Publisher\Contract\PublisherRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PublisherRepository extends EntryRepository implements PublisherRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PublisherModel
     */
    protected $model;

    /**
     * Create a new PublisherRepository instance.
     *
     * @param PublisherModel $model
     */
    public function __construct(PublisherModel $model)
    {
        $this->model = $model;
    }
}
