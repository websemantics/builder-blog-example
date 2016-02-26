<?php

namespace Websemantics\BlogModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
/**
 * Class BlogModuleSeeder
 *
 *
 * @package   Websemantics\BlogModule
 */
class BlogModuleSeeder extends Seeder
{
    protected $seeders = ['Post' => 'Websemantics\BlogModule\Blog\Post\PostSeeder'];
    /**
     * Seed the localization module.
     */
    public function run()
    {
        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }
}