<?php namespace Websemantics\BlogModule\Blog\Post\Table;

use Websemantics\BlogModule\Blog\Post\PostModel;

/**
 * Class PostTableColumns
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Blog\Post\Table
 */

class PostTableColumns
{

    /**
     * Handle the columns.
     *
     * @param PostTableBuilder $builder
     */
    public function handle(PostTableBuilder $builder)
    {
        $builder->setColumns([
				'title',
				'content',]);
    }
}
