@extends('layouts.app')
@section('titulo', 'Novo Cliente')
    
@section('body')
    
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro de Cliente
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('inserir_cliente')}}" method="post">
                        @csrf
                       <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" placeholder="Nome do Cliente" value="{{old('nome')}}">
                       @if ($errors->has('nome'))
                        <div class="invalid-feedback">
                           {{$errors->first('nome')}} 
                        </div>
                       @endif
                       <input type="number" class="form-control mt-3 {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade" placeholder="Idade do Cliente" value="{{old('idade')}}">
                       @if ($errors->has('idade'))
                        <div class="invalid-feedback">
                            {{$errors->first('idade')}}    
                        </div>   
                       @endif
                       <input type="text" class="form-control mt-3 {{$errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco" placeholder="Endereço do Cliente" value="{{old('endereco')}}">
                       @if ($errors->has('endereco'))
                        <div class="invalid-feedback">
                            {{$errors->first('endereco')}}    
                        </div>    
                       @endif
                       <input type="text" class="form-control mt-3 {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" placeholder="Email do Cliente" value="{{old('email')}}">
                       @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}    
                        </div>    
                       @endif
                       <div class="mt-2">
                            <input type="submit" class="btn btn-primary btn-small" value="Salvar">
                            <input type="cancel" class="btn btn-danger btn-small" value="Cancelar">
                       </div>
                    </form>
                </div>
                    <div class="card-footer">
                 </div>
            </div>
        </div>
    </div>

@endsection