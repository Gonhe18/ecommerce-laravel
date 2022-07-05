@extends('layouts.app')
@section('titulo', 'Actualizar Producto')
@section('content')
  <section class="container">
    <form action="{{ route('editProd', $prodId) }}" method="post">
      @method('patch')
      @include('productos.formProd.formProd')
    </form>
  </section>
@endsection
