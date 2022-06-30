<?php namespace ConductLab\AuthorsModule\Publisher;

use ConductLab\AuthorsModule\Publisher\Contract\PublisherInterface;
use Anomaly\Streams\Platform\Model\Authors\AuthorsPublishersEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PublisherModel extends AuthorsPublishersEntryModel implements PublisherInterface
{
    use HasFactory;

    /**
     * @return PublisherFactory
     */
    protected static function newFactory()
    {
        return PublisherFactory::new();
    }
}
