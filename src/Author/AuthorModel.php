<?php namespace ConductLab\AuthorsModule\Author;

use ConductLab\AuthorsModule\Author\Contract\AuthorInterface;
use Anomaly\Streams\Platform\Model\Authors\AuthorsAuthorEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AuthorModel extends AuthorsAuthorEntryModel implements AuthorInterface
{
    use HasFactory;

    /**
     * @return AuthorFactory
     */
    protected static function newFactory()
    {
        return AuthorFactory::new();
    }
}
