<?php namespace Websemantics\BlogModule\Post;

use Websemantics\BlogModule\Post\Contract\PostRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PostRepository extends EntryRepository implements PostRepositoryInterface
{

    /**
     * The entry model.
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
}
