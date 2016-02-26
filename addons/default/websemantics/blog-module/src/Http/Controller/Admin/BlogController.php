<?php namespace Websemantics\BlogModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class BlogController
 *
 *
 * @package   Websemantics\BlogModul\Http\Controller\Admin
 */

class BlogController extends AdminController
{
 /**
   * Return master admin view.
   *
   * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
   */
  public function index()
  {
       return view('websemantics.module.blog::admin.master');
  }
}