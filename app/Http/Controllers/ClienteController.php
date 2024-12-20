<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   public function index()
   {
        $cliente = Cliente::orderByDesc('created_at')->get();
        return view('cliente/index', ['cliente' => $cliente]);
   }
   public function criar()
   {
        return view('cliente/criar');
   }
   public function mostrar()
   {
        return view('cliente/mostrar');
   }
   // salvar no banco de dados
   public function store(ClienteRequest $request)
   {
        // validar os campos
        $request->validated();

        // salvar no banco
        Cliente::create($request->all());

        // redirecionamento

        return redirect()->route('cliente.index')->with('sucesso','Cliente cadastro com sucesso!');
   }
   // visualizar os dados a partir do id do cliente
   public function editar(Cliente $cliente)
   {
        return view('cliente/editar', ['cliente' => $cliente]);
   }
   // update os dados a partir do id do cliente
   public function update(ClienteRequest $request, Cliente $cliente)
   {
        // validar os campos
        $request->validated();

        // edita as informacoes no banco de dados

        $cliente->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'fone' => $request->fone,
            'nascimento' => $request->nascimento,
        ]);

        return redirect()->route('cliente.index')->with('sucesso','Cliente atualizado com sucesso!');
   }

   public function destroy(Cliente $cliente)
   {
        $cliente->delete();
        return redirect()->route('cliente.index')->with('sucesso','Cliente excluido com sucesso!');
   }

}
