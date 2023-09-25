@extends('layouts.app')
@section('titulo', 'Editar Cliente')
    
@section('body')
    
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Edição de Cliente
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('edicao_cliente', $cliente->id)}}" method="post">
                        @csrf
                       <input type="text" class="form-control" name="nome" value="{{$cliente->nome}}">
                       <input type="number" class="form-control mt-3" name="idade" value="{{$cliente->idade}}">
                       <input type="text" class="form-control mt-3" name="endereco" value="{{$cliente->endereco}}">
                       <input type="text" class="form-control mt-3" name="email" value="{{$cliente->email}}">
                       <div class="mt-2">
                            <input type="submit" class="btn btn-primary btn-small" value="Salvar">
                            <input type="cancel" class="btn btn-danger btn-small" value="Cancelar">
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection