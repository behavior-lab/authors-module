<?php namespace ConductLab\AuthorsModule\Http\Controller\Admin;

use ConductLab\AuthorsModule\Author\Form\AuthorFormBuilder;
use ConductLab\AuthorsModule\Author\Table\AuthorTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class AuthorsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param AuthorTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(AuthorTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param AuthorFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(AuthorFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param AuthorFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AuthorFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
