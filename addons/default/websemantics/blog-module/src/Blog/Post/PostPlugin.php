<?php namespace Websemantics\BlogModule\Blog\Post;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class PostPlugin
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Blog\Post
 */

class PostPlugin extends Plugin
{

    /**
     * The post repository.
     *
     * @var PostRepository
     */
    protected $posts;

    /**
     * Create a new PostPlugin instance.
     *
     * @param PostRepository $posts
     */
    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    /**
     * Get the plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {

    }
}
