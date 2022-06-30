<?php namespace ConductLab\AuthorsModule\Http\Controller\Admin;

use ConductLab\AuthorsModule\SocialMedia\Form\SocialMediaFormBuilder;
use ConductLab\AuthorsModule\SocialMedia\Table\SocialMediaTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SocialMediaController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SocialMediaTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SocialMediaTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SocialMediaFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SocialMediaFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SocialMediaFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SocialMediaFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
