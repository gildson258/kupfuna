<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    //
    private $usuario;

    public function __construct(User $usuario)
    {
        $this->usuario = $usuario;
    }

    public function index(User $usuario)
    {
        $usuarios = $usuario->all();
        return view('usuario', compact('usuarios'));
    }

    public function registo()
    {
        return view('register_user');
    }

    public function store(Request $request)
    {
        //recebe todos os dos do formulario
        $dataForm = $request->all();

        //verifica se o email introduzido ja esta na base de dados
        $email = DB::table('users')->where('email', $request->email)->first();

        //verifica se foi retornado algum email
        if ($email) {

            $validate = validator($dataForm, $this->usuario->rules);
            if ($validate->fails()) {
                return redirect()->back()
                    ->withErrors($validate)
                    ->withInput();
            }

            return redirect()->back();

        } else {
            //insere na base de dados e resutado coloca na varial $insert (boolean )
            $insert = $this->usuario->create($dataForm);

            if ($insert) {
                return redirect('/documentos');
            } else {
                return redirect()->back();
            }

        }

    }

    public function update()
    {
        $update = $this->usuario
            ->where('email', 'joelaugusto97@gmail.com')
            ->update([
                'name' => 'joel',
                'email' => 'hfshjfkjhkkjjs@skd.com',
                'password' => 'sjdkhsjfhsfs',
                'categoria' => 'estudante',
            ]);

        if ($update) {
            return 'atualizado com sucesso';
        } else {
            return 'falha ao atualizar';
        }

    }

    public function delete(Request $request)
    {
        $email = $request->only('email');
        $delete = $this->usuario
            ->where('email', $email)
            ->delete();
        if ($delete) {
            return 'apagado com sucesso';
        } else {
            return 'falha ao apagar';
        }

    }

}
