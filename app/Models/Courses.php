<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    
    protected $table ='courses';
    protected $primaryKey = 'id_courses';
    protected $fillable=[
        'title',
        'course_category_id',
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class, 'course_category_id', 'course_category_id');
    }
    public function usercourses()
    {
        return $this->hasMany(users_barang::class, 'id_courses', 'id_courses');
    }

}
