@extends('adminlte::page')

@section('title', 'ImovelTTE')

@section('content_header')
<h1>Alteração de dados do corretor</h1>
@stop

@section('content')
<form action="{{ route('corretores.update', $corretor->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">

    <div class="panel panel-default">
        <div class="panel-heading">
            Informe os dados do corretor a ser cadastrado
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="nome">Nome do corretor</label>
                    <input type="text" name="nome" id="nome" class="form-control" required value="{{ $corretor->nome_corretor }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-2">
                    <label for="creci">creci</label>
                    <input type="text" name="creci" id="creci" class="form-control" value="{{ $corretor->creci }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm col-sm-3">
                    <label for="fone">telefone </label>
                    <input type="phone" name="fone" id="fone" class="form-control" required value="{{ $corretor->fone }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $corretor->email }}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-8">
                    <label for="nome_corretora">Nome da Corretora</label>
                    <input type="text" name="nome_corretora" id="nome_corretora" class="form-control" value="{{ $corretor->nome_corretora }}">
                </div>
            </div>


        </div>
        <div class='panel-footer'>
            <a href="{{route('corretores.index')}}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>

    </div>
</form>








@stop

@section('css')

@stop

@section('js')

@stop
