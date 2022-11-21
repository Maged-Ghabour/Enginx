<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "name" , "parent_id" , "image" , "description" , "slug"
    ];

    public function products(){
        return $this->hasMany(Product::class , "category_id" , "id");
    }

    public function parent(){
        return $this->belongsTo(Category::class , "parent_id" , "id")
        ->withDefault([
            "name" => "تصنيف أساسي"
        ]);

    }

    public function children(){
        return $this->hasMany(Category::class , "parent_id" , "id");
    }


    public static function rules($id=0){
        return [
        "name"      => "required|string|min:3|max:100|unique:categories,name,$id",
        "parent_id" => "nullable|int|exists:categories,id",
        "description" =>"required",

        ];
    }
}
