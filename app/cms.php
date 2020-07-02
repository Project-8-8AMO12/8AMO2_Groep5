<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cms extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
        [
            'pageName',
            'sectionId',
            'title',
            'article',
            'imageName'
        ];
}
