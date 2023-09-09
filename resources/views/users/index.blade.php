@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Usuários</h2>

    <!-- Botão "Novo Usuário" que abre o modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUserModal">
        Novo Usuário
    </button>

    <!-- Tabela para listar os usuários -->
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nome }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->telefone }}</td>
                <td>{{ $user->data_de_nascimento }}</td>
                <td>
                    <!-- Botão de Edição -->
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>

                    <!-- Botão de Exclusão -->
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal de Cadastro de Usuário -->
<div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Novo Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Coloque aqui o formulário de cadastro de novo usuário -->
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <!-- Adicione os demais campos aqui (e-mail, telefone, CEP, etc.) -->
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection