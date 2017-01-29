<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 30/1/2017
 * Time: 12:42 AM
 */
use Illuminate\Database\Eloquent\Model;

class Post extends Model {


    protected $table = 'posts';
    protected $fillable = [
        'id',
        'text'
    ];

}