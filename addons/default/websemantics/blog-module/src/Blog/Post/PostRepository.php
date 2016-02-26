<?php namespace Websemantics\BlogModule\Blog\Post;

use Websemantics\BlogModule\Blog\Post\Contract\PostRepositoryInterface;


/**
 * Class PostRepository
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Blog\Post
 */

class PostRepository implements PostRepositoryInterface
{
    /**
     * The post model.
     *
     * @var PostModel
     */
    protected $model;

    /**
     * Create a new PostRepository instance.
     *
     * @param PostModel $model
     */
    public function __construct(PostModel $model)
    {
        $this->model = $model;
    }

    /**
     * Truncate post.
     */
    public function truncate()
    {
        return $this->model->truncate();
    }

    /**
     * Create a new post.
     *
     * @param array $attributes
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Return model.
     */
    public function model()
    {
        return $this->model;
    }

    /**
     * Find a model by id or list of attributes
     *
     * @param int / array $attributes, value of record (id) or list of (attributes)
     */
    public function find($attributes)
    {
        if(is_array($attributes)){
            return $this->model->where($attributes)->first();  
        }  elseif(is_numeric($id = $attributes)){
            return $this->model->find($id);
        }

        return null;
    }

    /**
     * Find a model by a specific field
     *
     * @param string $field, the field to find by
     * @param string / int, $value, value of that field
     * @param string $operation, the relational operation
     */
    public function findBy($field, $value, $operation = '=')
    {
        return $this->model->where($field, $operation, $value)->first(); 
    }

    /**
     * Find a model by a list of attributes, if not found, attept to create one
     *
     * @param array $attributes, list of attributes values
     */
    public function findOrNew(array $attributes)
    {
        if(is_null($model = $this->find($attributes))){
            return $this->create($attributes);
        }

        return $model;
    }
}
