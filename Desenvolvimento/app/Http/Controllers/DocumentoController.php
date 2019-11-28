<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class documentoController extends Controller
{
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }
    

    public function store(Request $request)
    {
        //recebe todos os dos do formulario
        $dataForm = $request->all();
        
        $extension = $request->documento->extension();
        $nameFile = "{$dataForm['titulo']}.{$extension}";
        //dd($nameFile);
        $dataForm['documento'] = $nameFile;
        $dataForm['user_id'] = 1;
        $request = $request->documento->storeAs('documentos', $nameFile);
        $msg = 'Upload feito com sucesso!';

        //insere na base de dados e resutado coloca na varial $insert (boolean )
        $this->book->create($dataForm);
        return redirect()->back();

    }

    public function index(){
        $docs = $this->book->all()->reverse();
        return view('documentos',compact('docs')); 
    }
}
