<?php
/**
 * Created by PhpStorm.
 * User: lina
 * Date: 4/20/18
 * Time: 11:07 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public $fillable = ['titre','description','type'];

}