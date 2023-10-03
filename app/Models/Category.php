<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    // harusnya gak error
    use Sluggable;
    use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = ['name','slug'];

    public function sluggable(): array
    {
        return[
            'slug' => [
                'source' => 'name'
            ]
            ];
    }
}
