<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_domicilio;
use Carbon\Carbon;
use Carbon\Doctrine\CarbonDoctrineType;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getTodo(){
        return User::with('user_domicilio')->get();
    }

    public function getEdad($id){
        $data = User::where('id', $id);
        $dateData = Carbon::parse($data->fecha_nacimento);
        return $dateData->diffInDays(Carbon::now());
    }
}
