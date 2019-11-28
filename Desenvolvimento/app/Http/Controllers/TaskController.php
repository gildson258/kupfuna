<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller{


    //$this->group(['middleware' => ['auth', 'auth.unique.user']], function()
    //{     // Rotas autenticadas });
   
    public function __construct(){



        $this->middleware('auth')
        ->only(['turma','perfil','grupo','material']);
    }


    public function index(){
        $emails = DB::table('users')->pluck('email');
        $docs = Book::all();
        return view('home',['emails'=>$emails,'docs'=>$docs]);
    }

    
    public function documentos(){
        
        return view('documentos',['docs'=>$docs]); 
    }

    public function turma(){

    }

    public function perfil(){
        
    }

    public function grupo(){
        
    }

    public function material(){
        
    }
}