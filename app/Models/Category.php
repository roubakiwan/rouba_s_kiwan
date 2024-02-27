<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','quality','source'];
    private mixed $created_at;

    public function product():HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    protected $hidden=['created_from'];

    public function  getCreatedFromAttributes(): mixed
    {
        return $this->created_at->diffForHumans();
    }
}
