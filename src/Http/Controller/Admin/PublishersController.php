<?php namespace ConductLab\AuthorsModule\Http\Controller\Admin;

use ConductLab\AuthorsModule\Publisher\Form\PublisherFormBuilder;
use ConductLab\AuthorsModule\Publisher\Table\PublisherTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PublishersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PublisherTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PublisherTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PublisherFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PublisherFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PublisherFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PublisherFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
