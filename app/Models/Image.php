<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;
    protected $fillable=['image','url'];

    public function imageable():MorphTo
    {
        return $this->morphTo(Category::class);
    }

    public function object():MorphTo
    {
        return $this->morphTo(Usere::class);
    }

    public function name():MorphTo
    {
        return $this->morphTo(Product::class);
    }

}

