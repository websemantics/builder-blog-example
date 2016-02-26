<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleBlogCreateBlogFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title'                      => 'anomaly.field_type.text',
        'content'                    => 'anomaly.field_type.text'
    ];

}
