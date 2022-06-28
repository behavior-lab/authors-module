<?php namespace BehaviorLab\AuthorsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use BehaviorLab\AuthorsModule\SocialMedia\Contract\SocialMediaRepositoryInterface;
use BehaviorLab\AuthorsModule\SocialMedia\SocialMediaRepository;
use Anomaly\Streams\Platform\Model\Authors\AuthorsSocialMediaEntryModel;
use BehaviorLab\AuthorsModule\SocialMedia\SocialMediaModel;
use BehaviorLab\AuthorsModule\Publisher\Contract\PublisherRepositoryInterface;
use BehaviorLab\AuthorsModule\Publisher\PublisherRepository;
use Anomaly\Streams\Platform\Model\Authors\AuthorsPublishersEntryModel;
use BehaviorLab\AuthorsModule\Publisher\PublisherModel;
use BehaviorLab\AuthorsModule\Author\Contract\AuthorRepositoryInterface;
use BehaviorLab\AuthorsModule\Author\AuthorRepository;
use Anomaly\Streams\Platform\Model\Authors\AuthorsAuthorsEntryModel;
use BehaviorLab\AuthorsModule\Author\AuthorModel;
use Illuminate\Routing\Router;

class AuthorsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/authors/social_media'           => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\SocialMediaController@index',
        'admin/authors/social_media/create'    => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\SocialMediaController@create',
        'admin/authors/social_media/edit/{id}' => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\SocialMediaController@edit',
        'admin/authors/publishers'           => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\PublishersController@index',
        'admin/authors/publishers/create'    => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\PublishersController@create',
        'admin/authors/publishers/edit/{id}' => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\PublishersController@edit',
        'admin/authors'           => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\AuthorsController@index',
        'admin/authors/create'    => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\AuthorsController@create',
        'admin/authors/edit/{id}' => 'BehaviorLab\AuthorsModule\Http\Controller\Admin\AuthorsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //BehaviorLab\AuthorsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    BehaviorLab\AuthorsModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //BehaviorLab\AuthorsModule\Event\ExampleEvent::class => [
        //    BehaviorLab\AuthorsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => BehaviorLab\AuthorsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        AuthorsSocialMediaEntryModel::class => SocialMediaModel::class,
        AuthorsPublishersEntryModel::class => PublisherModel::class,
        AuthorsAuthorsEntryModel::class => AuthorModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        SocialMediaRepositoryInterface::class => SocialMediaRepository::class,
        PublisherRepositoryInterface::class => PublisherRepository::class,
        AuthorRepositoryInterface::class => AuthorRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
