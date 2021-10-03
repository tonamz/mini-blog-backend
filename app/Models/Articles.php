<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'articles';
    protected $fillable = [
        'name', 'status', 'content', 'category', 'author'
    ];
}