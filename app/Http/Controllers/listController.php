<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;//siamo dicendo di usare il datbase car
class listController extends Controller
{
    public function index(){

        $cars=Car ::all();//stiamo dicendo prendimi tutto il database
        dump($cars);

        return view('list', ['cars'=>$cars]);// qui sta la variabile classica per stampare il contenuto
    }
}
