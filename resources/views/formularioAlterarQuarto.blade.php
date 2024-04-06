@extends('layout')
@section('content')

<section class="container mt-5"> 
  <form class="row g-3" method="Post" action="{{route('mostrar-quarto', $registrosQuarto->id)}}">
  @method('put')
  @csrf
    <div class="col-md-10">
      <label for="inputNumero" class="form-label">Número do quarto:</label>
      <input type="text" class="form-control" id="inputNumero" value="{{old('numeroQuarto', $registrosQuarto->numeroQuarto)}}" name="numeroQuarto" placeholder="204">
    </div>

    <div class="col-md-10">
      <label for="inputNome" class="form-label"><Title>Tipo quarto</Title>:</label>
      <input type="text" class="form-control" id="inputNome" value="{{old('tipoQuarto', $registrosQuarto->Quarto)}}" name="tipoQuarto" placeholder="Classe A">
    </div>

    <div class="col-md-10">
      <label for="inputNumero" class="form-label">Valor diária:</label>
      <input type="text" class="form-control" id="inputNumero" value="{{old('valorDiaria', $registrosQuarto->valorDiaria)}}" name="valorDiaria" placeholder="R$366">
    </div>


    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

  </form>
</section>

@endsection