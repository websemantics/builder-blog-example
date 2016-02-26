<?php namespace Websemantics\BlogModule\Blog\Post;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class PostSeeder
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @package   Websemantics\BlogModule\Blog\Post
 */

class PostSeeder extends Seeder
{

    /**
     * The $posts seeder data
     *
     * @var array
     */
    protected $data = [
          ['title' => 'Laravel', 'content' => 'PHP framework'], 
  ['title' => 'PyroCMS', 'content' => 'PHP CMS']

    ];

    /**
     * The $posts repository.
     *
     * @var PostRepository
     */
    protected $posts;

    /**
     * Create a new PostSeeder instance.
     *
     * @param PostRepository $posts
     */
    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    /**
     * Seed the $posts.
     */
    public function run()
    {
        $this->posts->truncate();

       foreach ($this->data as $item){
            $this->posts->create($item);
       }
    }
}
