<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'phone' => 'required|string',
            'birth_date' => 'required|date',
            // Adicione outras regras de validação para os campos restantes
        ]);

        // Crie um novo usuário com base nos dados validados
        $user = new User();
        $user->name = $request->input('name');
        $user->cpf = $request->input('cpf');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->birth_date = $request->input('birth_date');
        // Atribua os valores dos outros campos aqui

        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|unique:users,cpf,'.$id,
            'email' => 'required|string|email|unique:users,email,'.$id,
            'phone' => 'required|string',
            'birth_date' => 'required|date',
            // Adicione outras regras de validação para os campos restantes
        ]);

        // Busque o usuário pelo ID
        $user = User::findOrFail($id);

        // Atualize os campos do usuário com base nos dados validados
        $user->nome = $request->input('name');
        $user->cpf = $request->input('cpf');
        $user->email = $request->input('email');
        $user->telefone = $request->input('phone');
        $user->data_de_nascimento = $request->input('birthdate');
        $user->cep = $request->input('cep');
        $user->endereco = $request->input('address');
        $user->complemento = $request->input('complement');
        $user->bairro = $request->input('neighborhood');
        $user->cidade = $request->input('city');
        $user->estado = $request->input('state');

        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        // Busque o usuário pelo ID
        $user = User::findOrFail($id);

        // Exclua o usuário
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuário excluído com sucesso!');
    }
}
