<?php namespace Websemantics\BlogModule\Blog\Post\Contract;

/**
 * Interface PostRepositoryInterface
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Blog\Post\Contract
 */

interface PostRepositoryInterface
{

    /**
     * Truncate post.
     *
     * @return static
     */
    public function truncate();

    /**
     * Create a new post.
     *
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes);

}
