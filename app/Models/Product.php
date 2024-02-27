<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\App;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'quality','price','category_id','usere_id'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class,'category');
    }
    public function User():BelongsTo
    {
        return $this->belongsTo(Usere::class,'usere');
    }
    public function images():MorphMany
    {
        return $this->morphMany(Image::class,'name');
    }
    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class);
    }
    protected $hidden=['created_from'];
    private mixed $created_at;

    public function getCreatedFromAttributes()
    {
        return $this->created_at->diffForHumans();
    }
    public  static function boot()
    {
        parent::boot();
        static::saving(function ($product){
            if ($product->price<150){
                return false;
            }
        });
    }

}





