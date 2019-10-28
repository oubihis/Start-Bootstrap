<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   	public function Category() {
        return $this->belongsTo(Category::class);
   }
}
