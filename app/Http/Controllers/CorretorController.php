<?php

namespace App\Http\Controllers;

use App\Corretor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CorretorController extends Controller
{

    /**
     * index - Exibir uma relaçao de registro na "tela"
     * create - Exibir um formulário HTML para ser solicitado dados ao usuário
     * store - Recebe os dados do formulário (via create) e envia para o BD.
     * show - Exibir uma página com os dados de um determinado registro.
     * edit - Exibir um formulário com os dados de um determinado registro.
     * update - Recebe os dados do formulário (via edit) e atualizado no BD.
     * destroy - Exclui um determinado registro do BD.
     */


    public function index()
    {
        $corretores = Corretor::all();

        return view('corretores.index', compact('corretores'));
    }

    public function create()
    {
        return view('corretores.create');
    }

    public function store(Request $request)
    {
        Corretor::create($request->all());

        return redirect()->route('corretores.index');
    }

    public function show($id)
    {
        $corretor = Corretor::find($id);

        return view('corretores.show', compact('corretor'));
    }


    public function edit($id)
    {
        $corretor = Corretor::find($id);

        return view('corretores.edit', compact('corretor'));
    }

    public function update(Request $request, $id)
    {
        // Exibe na tela os valores das variáveis recebidas
        // como parâmetro vindas do formulário
        // dd($id, $request);

        // update corretores set campo1=valor1, campo2=valor2 ... where id=$id
        DB::table('corretores')
            ->where('id', $id)
            ->update(
                [
                'nome_corretor' => $request->nome,
                'creci' => $request->creci,
                'fone' => $request->fone,
                'email' => $request->email,
                'nome_corretora' => $request->nome_corretora
            ]);

        return redirect()->route('corretores.index');
    }

    public function destroy($id)
    {
        //dd($corretor);

        Corretor::destroy($id);

        return redirect()->route('corretores.index');
    }
}
