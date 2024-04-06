@extends('layout')
@section('content')

<section class="container mt-5"> 
  <form class="row g-3" method="Post" action="{{route('mostrar-funcionario', $registrosFuncionario->id)}}">
  @method('put')
  @csrf
    <div class="col-md-10">
      <label for="inputNome" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="inputNome" value="{{old('nome', $registrosFuncionario->nome)}}" name="nome" placeholder="Paulo da Silva">
    </div>

    <div class="col-md-10">
      <label for="inputNome" class="form-label">Função:</label>
      <input type="text" class="form-control" id="inputNome" value="{{old('funcao', $registrosFuncionario->funcao)}}" name="funcao" placeholder="cozinheiro">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

  </form>
</section>

@endsection