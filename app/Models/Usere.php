<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Usere extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'job','image'];

    public function product():HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class,'object');
    }
    protected $hidden=['created_from'];
    private mixed $created_at;

    public function getCreatedFromAttributes()
    {
        return $this->created_at->diffForHumans();
    }
}
