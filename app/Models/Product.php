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
    protected $fillable = ['name', 'quality','price','images','category_id','usere_id'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function User():BelongsTo
    {
        return $this->belongsTo(Usere::class, 'usere_id');
    }
    public function images():MorphMany
    {
        return $this->morphMany(Image::class,'name');
    }
    protected $hidden=['created_from'];
    private mixed $created_at;

    public function getCreatedFromAttributes()
    {
        return $this->created_at->diffForHumans();
    }

}





