<?php

namespace Websemantics\BlogModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
/**
 * Class BlogModuleServiceProvider
 *
 *
 * @package   Websemantics\BlogModul
 */
class BlogModuleServiceProvider extends AddonServiceProvider
{
    protected $plugins = [];
    protected $routes = ['admin/blog/posts' => 'Websemantics\BlogModule\Http\Controller\Admin\PostsController@index', 'admin/blog/posts/create' => 'Websemantics\BlogModule\Http\Controller\Admin\PostsController@create', 'admin/blog/posts/edit/{id}' => 'Websemantics\BlogModule\Http\Controller\Admin\PostsController@edit', 'admin/blog' => 'Websemantics\BlogModule\Http\Controller\Admin\BlogController@index'];
    protected $bindings = ['Websemantics\BlogModule\Blog\Post\PostModel' => 'Websemantics\BlogModule\Blog\Post\PostModel'];
    protected $middleware = [];
    protected $listeners = [];
    protected $providers = [];
    protected $singletons = ['Websemantics\BlogModule\Blog\Post\Contract\PostRepositoryInterface' => 'Websemantics\BlogModule\Blog\Post\PostRepository'];
    protected $overrides = [];
    protected $mobile = [];
    protected $commands = [];
    public function register()
    {
    }
    public function map()
    {
    }
}