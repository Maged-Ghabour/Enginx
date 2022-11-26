<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        "title" ,  "image" , "description" , "expire_date" , "features"
    ];



    // Local scope for Filter (Search)

    public function scopeFilter(Builder $builder , $filters){



        if($filters["name"] ?? false){
            $builder->where("title" , "like" , "%{$filters["name"]}%");
        }

    }







}
