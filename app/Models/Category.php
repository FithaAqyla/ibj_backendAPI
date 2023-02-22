<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $primaryKey = 'course_category_id';

    protected $fillable=[
        'name', 
    ];
    public function courses(){
        return $this->hasMany(Courses::class, 'course_category_id', 'course_category_id');
    }
}
