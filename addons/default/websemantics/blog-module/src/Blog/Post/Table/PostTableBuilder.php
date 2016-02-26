<?php namespace Websemantics\BlogModule\Blog\Post\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class PostTableBuilder
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Blog\Post\Table
 */

class PostTableBuilder extends TableBuilder
{

    /**
     * The table buttons.
     *
     * @var array
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array
     */
    public $actions = [
        'delete'
    ];
}
