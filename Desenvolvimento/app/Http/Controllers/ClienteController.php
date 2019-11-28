<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mensagem_cliente;
use App\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    //
    private $cliente;

    public function __construct(Mensagem_cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function store(Request $request)
    {
        //recebe todos os dos do formulario
        $dataForm = $request->all();
        //insere na base de dados e resutado coloca na varial $insert (boolean )
        $this->cliente->create($dataForm);
        $docs = Book::all();
        $emails = DB::table('users')->pluck('email');
        $message = 'A sua mensagem foi enviada com sucesso! Agracemos pela sua contribuição';
        return redirect()->back()->with(compact('message','emails','docs')));

    }
}
