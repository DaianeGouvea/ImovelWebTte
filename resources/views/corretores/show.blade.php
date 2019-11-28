@extends('adminlte::page')

@section('title', 'ImóvelTTé')

@section('content_header')
<h1>Detalhes do Corretor</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do Corretor
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
                Nome do Corretor
            </div>
            <div class="col-sm-10">
                {{ $corretor->nome_corretor }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                CRECI
            </div>
            <div class="col-sm-10">
                {{ $corretor->creci }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Telefone
            </div>
            <div class="col-sm-10">
                {{$corretor->fone}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Email
            </div>
            <div class="col-sm-10">
                {{$corretor->email}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                Corretora
            </div>
            <div class="col-sm-10">
                {{$corretor->nome_corretora}}
            </div>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{route('corretores.index')}}" class="btn btn-default">Voltar</a>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop
