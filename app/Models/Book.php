<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =['isbn','title','mmtitle','coverphoto','pages','publishyear','price','discount','summary','annotation','type','file','status','author_id','language_id'];
}
