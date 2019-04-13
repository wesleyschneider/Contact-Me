@extends('app')

@section('conteudo')

    <h1>ContactMe</h1>

    <hr />

    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="/enviar" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
      </div>

      <div class="form-group">
        <input type="text" id="email" name="email" class="form-control" placeholder="E-Mail">
      </div>

      <div class="form-group">
        <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Digite sua mensagem"></textarea>
      </div>

      <div class="form-group">
        <select name="categoria_id" id="categoria_id" class="form-control">
          <option value="null">Selecione uma categoria</option>
          @foreach(App\Categoria::all() as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button><br><br>
      <a href="lista" class="btn btn-primary">Lista</a>
      @if(Auth::check())
        <a href="auth/logout" class="btn btn-danger">Logout</a>
      @endif

    </form>
@endsection