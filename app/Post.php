<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use FullTextSearch;

    /**
     * The columns of the full text index
     */
    protected $searchable = [
        'title',
        'body'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body'
    ];
}
