<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $fillable = ['objet','mail_exped','nom_exped','contenu'];

}
