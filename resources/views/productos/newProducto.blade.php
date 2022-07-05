@extends('layouts.app')
@section('titulo', 'Nuevo Producto')
@section('content')
  <section class="container">
    @if (session('status'))
      <div class="alert alert-success w-100 my-3 h4" role="alert">{{ session('status') }}</div>
    @endif
    <form action="{{ route('newProd') }}" method="post">
      @include('productos.formProd.formProd')
    </form>
  </section>
@endsection
