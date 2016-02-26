<?php namespace Websemantics\BlogModule\Blog\Post\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class PostFormBuilder
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Blog\Post\Form
 */

class PostFormBuilder extends FormBuilder
{
    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
						'title',
						'content',];

}
