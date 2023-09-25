<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Cliente as ModelsCliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novo_cliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $mensagens = [
            'nome.required' => 'É necessário inserir um nome.',
            'nome.min' => 'É exigido no minimo 3 digitos no nome.',
            'nome.max' => 'É permitido no maximo 50 digitos no nome.',
            'idade.required' => 'É necessário inserir uma idade.',
            'endereco.required' => 'É necessário inserir um endereço.',
            'email.required' => 'É necessário inserir um email.',
            'email.unique' => 'Esse endereço de email já está em uso.',
            'email.email' => 'É necessário inserir um endereço de email válido.'
        ];

        $request->validate([
            'nome' => 'required|min:3|max:50',
            'idade' => 'required',
            'endereco' => 'required',
            'email' => 'required|unique:clientes|email'
        ], $mensagens);

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->save();

        $clientes = Cliente::all();
        return view('index', compact('clientes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        if (isset($cliente)) {
            return view('editar_cliente', compact('cliente'));
        }
        return redirect('/index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);
        if (isset($cliente)) {
            $cliente->nome = $request->input('nome');
            $cliente->idade = $request->input('idade');
            $cliente->endereco = $request->input('endereco');
            $cliente->email = $request->input('email');
            $cliente->save();
        }
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        if (isset($cliente)) {
            $cliente->delete();
        }
        $clientes = Cliente::all();
        return view('index', compact('clientes'));
    }
}
