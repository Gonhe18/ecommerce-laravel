@extends('layouts.app')
@section('titulo', 'Productos')
@section('content')
  <section class="container">
    @include('card.tarjetaProductos')
  </section>
@endsection
