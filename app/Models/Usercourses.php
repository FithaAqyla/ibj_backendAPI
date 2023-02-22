<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usercourses extends Model
{
    use HasFactory;
    protected $table = 'usercourses';
    protected $primaryKey = 'id_usercourses';
    protected $fillable = ['id_user','id_courses'];

    public function users(){
        return $this->belongsTo(Peserta::class, 'id_user','id_user');
    }
    public function courses(){
        return $this->belongTo(Courses::class, 'id_courses','id_courses');
    }
}
