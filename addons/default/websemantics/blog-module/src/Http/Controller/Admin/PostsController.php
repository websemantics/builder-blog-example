<?php namespace Websemantics\BlogModule\Http\Controller\Admin;

use Websemantics\BlogModule\Blog\Post\Form\PostFormBuilder;
use Websemantics\BlogModule\Blog\Post\Table\PostTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Routing\Redirector;

/**
 * Class PostController
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Http\Controller\Admin
 */

class PostsController extends AdminController
{

    /**
     * Redirect to posts.
     *
     * @param Redirector $redirector
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect(Redirector $redirector)
    {
        return $redirector->to('admin/blog/posts');
    }

    /**
     * Return an index of existing entries.
     *
     * @param PostTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(PostTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param PostFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(PostFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param PostFormBuilder $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(PostFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
