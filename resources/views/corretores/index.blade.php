@extends('adminlte::page')

@section('title', 'ImóvelTTé')

@section('content_header')
    <h1><i class="fas fa-fx fa-bars"></i> Listagem de Corretores</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Relaçao dos corretores cadastrados
            <div class="pull-right">
                <a href="{{ route('corretores.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a tela</a>
                <a href="{{ route('corretores.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir novo registro</a>
            </div>
        </div>

        <div class="panel-body">
            <table id="table-corretores" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Corretor</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Açoes</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($corretores as $corretor)
                    <tr>
                        <td>{{ $corretor->id }}</td>
                        <td>{{ $corretor->nome_corretor }}</td>
                        <td>{{ $corretor->fone }}</td>
                        <td>{{ $corretor->email }}</td>
                        <td>
                            <!-- botão visualização -->
                            <a href="{{ route('corretores.show', $corretor->id) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-fx fa-eye"></i>
                            </a>

                            <!-- botão alteração -->
                            <a href="{{ route('corretores.edit', $corretor->id) }}" class="btn btn-warning btn-xs">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>

                            <!-- botão exclusão -->
                            <form action="{{ route('corretores.destroy', $corretor->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <i class="fas fa-fx fa-trash-alt"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#table-corretores').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        },
   });
});
</script>
@stop
