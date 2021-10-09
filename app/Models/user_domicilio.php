<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_domicilio extends Model
{
    use HasFactory;

    protected $table = 'user_domicilio';
    protected $primaryKey = 'id';
    protected $fillable = ['domicilio', 'numero_exterior', 'colonia', 'ciudad'];
    public $incrementing = true;
    public $timestamps = false;

    public function user(){
        return $this->hasOne(User::class);
    }
}
