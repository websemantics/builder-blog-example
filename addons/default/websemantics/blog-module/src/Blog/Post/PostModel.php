<?php namespace Websemantics\BlogModule\Blog\Post;

use Websemantics\BlogModule\Blog\Post\Contract\PostInterface;
use Anomaly\Streams\Platform\Model\Blog\BlogPostsEntryModel;

/**
 * Class PostModel
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Blog\Post
 */

class PostModel extends BlogPostsEntryModel implements PostInterface
{

    /**
     * The number of minutes to cache query results.
     *
     * @var null|false|int
     */
    protected $ttl = false;

}