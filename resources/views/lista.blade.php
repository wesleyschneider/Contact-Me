@extends('app')

@section('conteudo')
    <h1>Lista de mensagens</h1>

    <hr />

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Mensagem</th>
          <th>Categoria</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contatos as $row)
        <tr>
          <th scope="row">{{ $row->id }}</th>
          <td>{{ $row->nome }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->mensagem }}</td>
          <td>{{ $row->categoria->nome }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <a href="/" class="btn btn-primary">Enviar mensagem</a>
    <a href="auth/logout" class="btn btn-danger">Logout</a>
@endsection