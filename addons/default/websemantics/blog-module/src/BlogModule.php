<?php

namespace Websemantics\BlogModule;

use Anomaly\Streams\Platform\Addon\Module\Module;
/**
 * Class BlogModule
 *
 *
 * @package   Websemantics\BlogModul
 */
class BlogModule extends Module
{
    /**
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = 'addon';
    protected $sections = ['home' => [], 'posts' => ['buttons' => ['create']]];
}