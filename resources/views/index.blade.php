@extends('layouts.app')
@section('titulo', 'Inicio')
    
@section('body')
    
    <div class="col-sm-12 text-center">
        <div class="card border">
            <div class="card-header">
                <div class="card-title">
                    Cadastro de Cliente
                </div>
            </div>
            <div class="card-body">    
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nome</td>
                            <td>Idade</td>
                            <td>Endereço</td>
                            <td>Email</td>
                            <td>Ações</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>    
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->idade}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>
                                    <a href="{{route('editar_cliente', $cliente->id)}}"><i class="fas fa-edit p-1"></i></a>
                                    <a href="{{route('apagar_cliente', $cliente->id)}}"><i class="fas fa-times text-danger p-1"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection