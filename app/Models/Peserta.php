<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table ='pesertas';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'name','email', 'password',

    ];
    public function usersCourses()
    {
        return $this->hasMany(Usercourses::class,  'id_user','id_user');
    }
}
